<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Tratamiento;
use App\trataPaciente;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidarFormularioRequest;

class pacientesController extends Controller
{
	public function getIndex()
	{
		//$pacientes=DB::table('pacientes')->where('apellidos', 'perez rua')->get();
		$pacientes = Paciente::all();
		return view('pacientesLayouts.lista', array('arrayPacientes' => $pacientes));
	}
	public function getShow($id)
	{
		$paciente = Paciente::findOrFail($id);
		$user = Paciente::find($id);
		$arrayFore= array();
		
		foreach ($user-> tratamientos as $us ) {
			array_push($arrayFore,$us);
			
		}
		
		return view('pacientesLayouts.show', array('datos' => $paciente,'tratamientos'=>$arrayFore));
	}

	public function getCreate()
	{
		return view('pacientesLayouts.create');
	}

	public function postCreate(ValidarFormularioRequest $request)
	{
		$p = new Paciente;

		$p->nombre = $request->input('nombre');
		$p->apellidos = $request->input('apellidos');
		$p->nacimiento = $request->input('aniversario');
		
     //dd($request->input('aniversario'));
		$p->save();
		

		return redirect()->action('pacientesController@getIndex');
	}


	public function getEdit($id)
	{
		$paciente = Paciente::findOrFail($id);
		
		return view('pacientesLayouts.edit', array('paciente' => $paciente));
	}

	public function putEdit(ValidarFormularioRequest $request, $id){

		$p = Paciente::findOrFail($id);
		$p->nombre = $request->input('nombre');
		$p->apellidos = $request->input('apellidos');
		$p->nacimiento = $request->input('nacimiento');

		
		$p->save();
		

		
		return redirect('/pacientes/' . $id);
	}

	public function deletePaciente(ValidarFormularioRequest $request, $id){

		$p = Paciente::findOrFail($id);

		
		$p->delete();
		
		return redirect()->action('pacientesController@getIndex');
	}
	

	public function crearTratamiento($id)
	{
		$paciente = Paciente::findOrFail($id);
		
		return view('tratamientosLayouts.create', array('paciente' => $paciente));
	}

	public function postTratamiento(Request $request, $id){

		$t =new Tratamiento;
		$t->tratamiento = $request->input('tratamiento');
		$t->descripcion = $request->input('descripcion');
		
		
		$t->save();
$idt=$t->id;
		$tp =new trataPaciente;
		$tp->id_tratamiento = $t->id;
		$tp->id_paciente = $id;
		
		
		$tp->save();
		

		
		return redirect('/pacientes/' . $id);
	}


	public function deleteTratamiento(Request $request, $id){

		$p = Tratamiento::findOrFail($id);

		
		$p->delete();
		
		return redirect()->action('pacientesController@getIndex');
	}
}
