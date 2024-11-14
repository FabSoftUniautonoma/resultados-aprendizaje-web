<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Estudiante;
use App\Models\Programas;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class EstudianteController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.estudiantes.gestionar_estudiantes');
    }

    public function create()
    {
        $programas = Programas::all();
        return view('admin.dashboard.estudiantes.registrar_estudiantes', compact('programas'));
    }

    public function store(Request $request)
    {
        if (!$request->hasFile('archivo_estudiante')) {

            // Validación de los datos del formulario
            $request->validate([
                'nombre_estudiante' => 'required|max:100',
                'apellido_estudiante' => 'required|max:100',
                'codigo_estudiante' => 'required|numeric',
                'correo_estudiante' => 'required|email|max:100',
                'contraseña_estudiante' => 'required|min:6',
                'programa_id' => 'required|exists:programas,id_programa', 
            ]);

            // Creación del estudiante en la base de datos
            Estudiante::create([
                'nombre_estudiante' => $request->nombre_estudiante,
                'apellido_estudiante' => $request->apellido_estudiante,
                'codigo_estudiante' => $request->codigo_estudiante,
                'correo_estudiante' => $request->correo_estudiante,
                'contraseña_estudiante' => Hash::make($request->contraseña_estudiante),
                'programa_id' => $request->programa_id, // Relación con el programa
            ]);
            
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
            return redirect()->route('registrarEstudiantes.create');
        }
      //  validación del archivo CSV
        $request->validate([
            'archivo_estudiante' => 'required|file|mimes:csv,txt|max:2048', // Validación del archivo CSV
        ]);

        // Procesar el archivo CSV
        if ($request->hasFile('archivo_estudiante')) {
            $file = $request->file('archivo_estudiante');
            $filePath = $file->getRealPath();
            $file = fopen($filePath, 'r');

            $header = fgetcsv($file, 1000, ',');

            // Leer cada línea del archivo y crear facultades
            while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
                // (nombre_facultad y descripcion_facultad)
                if (isset($data[0]) && isset($data[1]) && isset($data[2]) && isset($data[3]) && isset($data[4]) && isset($data[5])) {
                    // Subir a la base de datos
                    Estudiante::create([
                        'nombre_estudiante' => $data[0],
                        'apellido_estudiante' => $data[1],
                        'codigo_estudiante' => $data[2],
                        'correo_estudiante' => $data[3],
                        'contraseña_estudiante' => Hash::make($data[4]),
                        'programa_id' => $data[5], // Relación con el programa


                    ]);
                }
            }

            fclose($file);
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
        }

        return redirect()->route('registrarEstudiantes.create');
    }
}
