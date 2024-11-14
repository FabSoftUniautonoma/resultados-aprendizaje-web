<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class FacultadController extends Controller
{
    // Función para mostrar la vista de gestionar facultades
    public function index()
    {
        return view('admin.dashboard.facultades.gestionar_facultades');
    }

    // Función para mostrar la vista de registrar facultades
    public function create()
    {
        return view('admin.dashboard.facultades.registrar_facultades');
    }
    // Función para guardar una nueva facultad en la base de datos
    public function store(Request $request)
    {
        // Validación del formulario para la creación manual de facultades
        if (!$request->hasFile('archivo_facultad')) {
            $request->validate([
                'nombre_facultad' => 'required|string|max:100',
                'descripcion_facultad' => 'required|string|max:500',
            ]);

            // Crear nueva facultad manualmente
            Facultad::create([
                'nombre_facultad' => $request->nombre_facultad,
                'descripcion_facultad' => $request->descripcion_facultad,
            ]);
            
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
            return redirect()->route('registrarfacultad.create');
        }

        // Validación del archivo CSV
        $request->validate([
            'archivo_facultad' => 'required|file|mimes:csv,txt|max:2048', // Validación del archivo CSV
        ]);

        // Procesar el archivo CSV
        if ($request->hasFile('archivo_facultad')) {
            $file = $request->file('archivo_facultad');
            $filePath = $file->getRealPath();
            $file = fopen($filePath, 'r');
            
            $header = fgetcsv($file, 1000, ',');

            // Leer cada línea del archivo y crear facultades
            while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
                // (nombre_facultad y descripcion_facultad)
                if (isset($data[0]) && isset($data[1])) {
                    // Subir a la base de datos
                    Facultad::create([
                        'nombre_facultad' => $data[0],
                        'descripcion_facultad' => $data[1],
                    ]);
                }
            }

            fclose($file);
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
        }

        return redirect()->route('registrarfacultad.create');
        
    }
}
