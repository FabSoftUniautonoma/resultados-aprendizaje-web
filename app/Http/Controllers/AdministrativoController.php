<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrativo;

class AdministrativoController extends Controller
{
    // Muestra la lista de todos los administrativos
    public function index()
    {
        // Se recomienda utilizar paginación para mejorar la carga de datos en listas grandes
        $administrativos = Administrativo::paginate(10); // Paginación de 10 registros por página
        return view('admin.dashboard.personal_administrativo.gestionar_personal', compact('administrativos'));
    }

    // Muestra el formulario para crear un nuevo administrativo
    public function create()
    {
        return view('admin.dashboard.personal_administrativo.registrar_personal');
    }

    // Guarda un nuevo administrativo en la base de datos
    public function store(Request $request)
    {
        // Se puede agregar más reglas de validación como "min" para cadenas de texto o "numeric" para identificación
        $validatedData = $request->validate([
            'nombre_personal' => 'required|string|max:255',
            'apellido_personal' => 'required|string|max:255',
            'identificacion_personal' => 'required|string|unique:administrativos|max:255',
            'personal_rol' => 'required|in:Docente,Coordinador,Vicerrector',  // Si hay más roles, puedes agregar aquí
        ]);

        // Creación del nuevo registro en la base de datos
        Administrativo::create($validatedData);

        // Redirecciona con mensaje de éxito
        return redirect()->route('gestionarAdministrativos.index')->with('success', 'Administrativo creado exitosamente.');
    }

    // Muestra un administrativo específico
    public function show($id)
    {
        // Obtiene el administrativo por ID o retorna error 404 si no se encuentra
        $administrativo = Administrativo::findOrFail($id);
        return view('admin.dashboard.personal_administrativo.mostrar_personal', compact('administrativo'));
    }

    // Muestra el formulario para editar un administrativo existente
    public function edit($id)
    {
        // Obtiene el administrativo por ID o retorna error 404 si no se encuentra
        $administrativo = Administrativo::findOrFail($id);
        return view('admin.dashboard.personal_administrativo.editar_personal', compact('administrativo'));
    }

    // Actualiza los datos de un administrativo existente
    public function update(Request $request, $id)
    {
        // Validación de datos: Se asegura que la identificación solo sea única para el registro que se está actualizando
        $validatedData = $request->validate([
            'nombre_personal' => 'required|string|max:255',
            'apellido_personal' => 'required|string|max:255',
            'identificacion_personal' => 'required|string|max:255|unique:administrativos,identificacion_personal,'.$id.',id_administrativos',
            'personal_rol' => 'required|in:Docente,Coordinador,Vicerrector',
        ]);

        // Obtiene el administrativo por ID
        $administrativo = Administrativo::findOrFail($id);

        // Actualiza los datos en la base de datos
        $administrativo->update($validatedData);

        // Redirecciona con mensaje de éxito
        return redirect()->route('gestionarAdministrativos.index')->with('success', 'Administrativo actualizado exitosamente.');
    }

    // Elimina un administrativo de la base de datos
    public function destroy($id)
    {
        // Obtiene el administrativo por ID
        $administrativo = Administrativo::findOrFail($id);

        // Elimina el registro de la base de datos
        $administrativo->delete();

        // Redirecciona con mensaje de éxito
        return redirect()->route('gestionarAdministrativos.index')->with('success', 'Administrativo eliminado exitosamente.');
    }
}

