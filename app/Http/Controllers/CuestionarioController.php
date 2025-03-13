<?php

namespace App\Http\Controllers;

use App\Models\Cuestionario;
use App\Models\Pregunta;
use App\Models\PreguntaCuestionario;
use App\Models\Respuesta;
use App\Models\User;
use App\Models\UserCuestionario;
use App\Utils\Constants;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use RealRashid\SweetAlert\Facades\Alert;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuestionarios = Cuestionario::paginate(10);
        return view('admin.cuestionarios.gestionar', ['cuestionarios' => $cuestionarios]);
    }

    public function indexByUserId(int $id = null)
    {
        $cuestionarios = Cuestionario::paginate(10);
        return view('admin.encuesta.cuestionario.cuestionarios', ['cuestionarios' => $cuestionarios]);
    }

    public function showPreguntasByCuestionarioId(int $cuestionarioId)
    {
        $preguntaCuestionario = PreguntaCuestionario::where('cuestionario_id', $cuestionarioId)->with('preguntas', 'cuestionarios')->get();
        $preguntaActual = 1;
        $totalPreguntas = $preguntaCuestionario->count();
        $opciones = Constants::OPCIONES_SELECCION;
        return view(
            'admin.encuesta.cuestionario.intento',
            [
                'preguntaCuestionario' => $preguntaCuestionario,
                'preguntaActual' => $preguntaActual,
                'totalPreguntas' => $totalPreguntas,
                'opciones' => $opciones,
            ]
        );
    }


    public function storeIntentoUser(Request $request, int $cuestionarioId, int $userId)
    {
        //return $request->all();
        //$questions = Question::get();
        /* $preguntaCuestionario = PreguntaCuestionario::where('cuestionario_id', $cuestionarioId)->with('preguntas', 'cuestionarios')->get();
        foreach ($preguntaCuestionario as $pregunta){
            echo $pregunta->preguntas;
        } */
       $repuestas = [];
        for ($i = 1; $i <= 3; $i++) {
            $clave = "pregunta$i";
            $value = $request->$clave;
            $quest = [
                'id_pregunta' => $i,
                'id_respuesta' => intval($value),
            ];
            $repuestas[$i] = $quest;
        }
        $userCuestionario = UserCuestionario::create([
            'usuario_id' => $userId,
            'cuestionario_id' =>  $cuestionarioId,
            'respuestas_array' => json_encode($repuestas, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),
        ]);
        if($userCuestionario){
            Alert::success('Resultados guardados con éxito');
            return redirect()->route('cuestionario.showResultados', [
                'cuestionarioId' => $cuestionarioId,
                'userId' =>  $userId,
            ]);
        }
    }

    public function showResultados(int $cuestionarioId, int $userId)
    {
        $user = User::find($userId);
        $userCuestionario = UserCuestionario::where('cuestionario_id', $cuestionarioId)->where('usuario_id', $userId)->orderBy('created_at','DESC')->first();
        $respuestas = json_decode($userCuestionario->respuestas_array);
        $fechaComienzo = Carbon::parse($userCuestionario->created_at)->locale('es')->isoFormat('dddd, D [de] MMMM [de] YYYY, HH:mm');
        $cantidadRespuestas = 0;
        $puntaje = 0;
        $calificacion = 0;
        foreach ($respuestas as $respuesta) {
            $respuestaBd = Respuesta::where('id_respuesta', $respuesta->id_respuesta)->first();
            $puntaje += $respuestaBd->porcentaje;
            $cantidadRespuestas += 1;
        }
        $calificacion = ($puntaje*5)/$cantidadRespuestas;

        return view('admin.encuesta.cuestionario.resultados',[
            'user' => $user,
            'fechaComienzo' => $fechaComienzo,
            'userCuestionario' => $userCuestionario,
            'cantidadRespuestas' => $cantidadRespuestas,
            'puntaje' => $puntaje,
            'calificacion' => $calificacion,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
