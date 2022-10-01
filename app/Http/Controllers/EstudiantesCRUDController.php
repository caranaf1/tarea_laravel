<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use App\Models\tipos_sangre;
use Illuminate\Http\Request;

class EstudiantesCRUDController extends Controller
{

    public function index()
    {
        $data['estudiantes'] = Estudiantes::join('tipos_sangres', 'estudiantes.id_tipo_sangre', '=', 'tipos_sangres.id')
            ->get(['estudiantes.*', 'tipos_sangres.sangre']);
        $data['Sangre'] = tipos_sangre::all();
        return view('estudiantes.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'carne' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo_electronico' => 'required',
            'id_tipo_sangre' => 'required',
            'fecha_nacimiento' => 'required',
        ]);
        $estudiantes = new Estudiantes();
        $estudiantes->carne = $request->carne;
        $estudiantes->nombres = $request->nombres;
        $estudiantes->apellidos = $request->apellidos;
        $estudiantes->direccion = $request->direccion;
        $estudiantes->telefono = $request->telefono;
        $estudiantes->correo_electronico = $request->correo_electronico;
        $estudiantes->id_tipo_sangre = $request->id_tipo_sangre;
        $estudiantes->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiantes->save();
        return redirect()->route('Estudiantes.index')
            ->with('success', 'Estudiante Agregado Correctamente.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carne' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo_electronico' => 'required',
            'id_tipo_sangre' => 'required',
            'fecha_nacimiento' => 'required',
        ]);
        $estudiantes = Estudiantes::find($id);
        $estudiantes->carne = $request->carne;
        $estudiantes->nombres = $request->nombres;
        $estudiantes->apellidos = $request->apellidos;
        $estudiantes->direccion = $request->direccion;
        $estudiantes->telefono = $request->telefono;
        $estudiantes->correo_electronico = $request->correo_electronico;
        $estudiantes->id_tipo_sangre = $request->id_tipo_sangre;
        $estudiantes->fecha_nacimiento = $request->fecha_nacimiento;
        $estudiantes->save();
        return redirect()->route('Estudiantes.index')
            ->with('success', 'Estudiante Modificado Correctamente.');
    }

    public function destroy($id)
    {
        $estudiantes = Estudiantes::find($id);
        $estudiantes->delete();


        return redirect()->route('Estudiantes.index')
            ->with('success', 'Estudiante Eliminado Correctamente.');
    }
}
