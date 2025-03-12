<?php

namespace App\Http\Controllers;

use App\Models\Cuestionario;
use App\Models\Pregunta;
use App\Models\PreguntaCuestionario;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class CuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexByUserId(int $id = null)
    {
        $cuestionarios = Cuestionario::paginate(10);
        return view('admin.encuesta.cuestionario.cuestionarios', ['cuestionarios' => $cuestionarios]);
    }

    public function showPreguntasByCuestionarioId(int $cuestionarioId)
    {
        $preguntaCuestionario = PreguntaCuestionario::where('cuestionario_id', $cuestionarioId)->with('preguntas')->get();
        $preguntaActual = 1;
        $totalPreguntas = $preguntaCuestionario->count();
        return view('admin.encuesta.cuestionario.intento',
            [
                'preguntaCuestionario' => $preguntaCuestionario,
                'preguntaActual' => $preguntaActual,
                'totalPreguntas' => $totalPreguntas,
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
