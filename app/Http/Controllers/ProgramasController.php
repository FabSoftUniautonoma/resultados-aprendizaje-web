<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Programas;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramasController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.programas_academicos.gestionar_programas');
    }

    public function create()
    {
        $facultades = Facultad::all(); // Obtiene todas las facultades
        //dd($facultades);
        return view('admin.dashboard.programas_academicos.registrar_programas', compact('facultades'));
    }



    public function store(Request $request)
    {
        if (!$request->hasFile('archivo_programa')) {
            // Validación de los datos del formulario
            $request->validate([
                'nombre_programa' => 'required|string|max:255',
                'codigo_programa' => 'required|integer|unique:programas,codigo_programa',
                'numero_semestres_programa' => 'required|integer|min:1',
                'numero_creditos_programa' => 'required|integer|min:1',
                'facultad_id' => 'required|exists:facultades,id_facultad', 
            ]);

            // Crear un nuevo programa y guardar los datos
            Programas::create([
                'nombre_programa' => $request->nombre_programa,
                'codigo_programa' => $request->codigo_programa,
                'numero_semestres_programa' => $request->numero_semestres_programa,
                'numero_creditos_programa' => $request->numero_creditos_programa,
                'facultad_id' => $request->facultad_id, // Relación con la facultad
            ]);

            // Redirigir a una vista o página después de guardar
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
            return redirect()->route('registrarProgramas.create');
        }

        // Validación del archivo CSV
        $request->validate([
            'archivo_programa' => 'required|file|mimes:csv,txt|max:2048', // Validación del archivo CSV
        ]);

        // Procesar el archivo CSV
        if ($request->hasFile('archivo_programa')) {
            $file = $request->file('archivo_programa');
            $filePath = $file->getRealPath();
            $file = fopen($filePath, 'r');

            $header = fgetcsv($file, 1000, ',');

            // Leer cada línea del archivo y crear programas
            while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
                // (nombre_programa, codigo_programa, numero_semestres_programa, numero_creditos_programa)
                if (isset($data[0]) && isset($data[1]) && isset($data[2]) && isset($data[3]) && isset($data[4])) {
                    // Subir a la base de datos
                    Programas::create([
                        'nombre_programa' => $data[0],
                        'codigo_programa' => $data[1],
                        'numero_semestres_programa' => $data[2],
                        'numero_creditos_programa' => $data[3],
                        'facultad_id' => $data[4], // Relación con la facultad
                    ]);
                }
            }

            fclose($file);
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
        }
        
        return redirect()->route('registrarProgramas.create');
    }
}
