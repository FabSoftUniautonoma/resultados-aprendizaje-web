<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultad;
use App\Models\Programas;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramasController extends Controller
{
    // Método para listar todos los programas
    public function index()
    {
        $programas = Programas::with('facultad')->get(); // Trae todos los programas junto con su facultad
        return view('admin.dashboard.programas_academicos.gestionar_programas', compact('programas'));
    }

    // Método para mostrar el formulario de creación de programa
    public function create()
    {
        $facultades = Facultad::all(); // Obtiene todas las facultades
        return view('admin.dashboard.programas_academicos.registrar_programas', compact('facultades'));
    }

    // Método para almacenar un programa en la base de datos
    public function store(Request $request)
    {
        if (!$request->hasFile('archivo_programa')) {
            $request->validate([
                'nombre_programa' => 'required|string|max:255',
                'codigo_programa' => 'required|integer|unique:programas,codigo_programa',
                'numero_semestres_programa' => 'required|integer|min:1',
                'numero_creditos_programa' => 'required|integer|min:1',
                'facultad_id' => 'required|exists:facultades,id_facultad',
            ]);

            Programas::create($request->all());

            Alert::success('¡Éxito!', 'El programa ha sido registrado correctamente.');
            return redirect()->route('gestionarProgramas.index');
        }

        $request->validate([
            'archivo_programa' => 'required|file|mimes:csv,txt|max:2048',
        ]);

        if ($request->hasFile('archivo_programa')) {
            $file = $request->file('archivo_programa');
            $filePath = $file->getRealPath();
            $file = fopen($filePath, 'r');
            $header = fgetcsv($file, 1000, ',');

            while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
                if (isset($data[0], $data[1], $data[2], $data[3], $data[4])) {
                    Programas::create([
                        'nombre_programa' => $data[0],
                        'codigo_programa' => $data[1],
                        'numero_semestres_programa' => $data[2],
                        'numero_creditos_programa' => $data[3],
                        'facultad_id' => $data[4],
                    ]);
                }
            }

            fclose($file);
            Alert::success('¡Éxito!', 'Los cambios se guardaron correctamente.');
        }
        
        return redirect()->route('gestionarProgramas.index');
    }

    // Método para mostrar el formulario de edición de un programa específico
    public function edit($id)
    {
        $programa = Programas::findOrFail($id);
        $facultades = Facultad::all();
        return view('admin.dashboard.programas_academicos.editar_programa', compact('programa', 'facultades'));
    }

    // Método para actualizar un programa específico en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_programa' => 'required|string|max:255',
            'numero_semestres_programa' => 'required|integer|min:1',
            'numero_creditos_programa' => 'required|integer|min:1',
            'facultad_id' => 'required|exists:facultades,id_facultad',
        ]);

        $programa = Programas::findOrFail($id);
        $programa->update($request->all());

        Alert::success('¡Éxito!', 'El programa ha sido actualizado correctamente.');
        return redirect()->route('gestionarProgramas.index');
    }

    // Método para eliminar un programa específico de la base de datos
    public function destroy($id)
    {
        $programa = Programas::findOrFail($id);
        $programa->delete();

        Alert::success('¡Éxito!', 'El programa ha sido eliminado correctamente.');
        return redirect()->route('gestionarProgramas.index');
    }
}
