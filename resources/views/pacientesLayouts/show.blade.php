@extends('layouts.master')

@section('content')
<div class="row">
	<div class="col-sm-4"><img class="img-responsive img-thumbnail" src="https://www.coordinadora.com/wp-content/uploads/sidebar_usuario-corporativo.png" alt="Personita" ></div>
	<div class="col-sm-8">
		<h1>{{$datos->nombre}} {{$datos->apellidos}}</h1>
		<div>
			<table class="table" style="border: 1px solid black;">
				<thead class="thead-dark">
					<tr>
						<th scope="col">TRATAMIENTO</th>
						<th scope="col">DESCRIPCIÓN</th> 
						<th scope="col">acción</th> 
					</tr>
				</thead>
				<tbody>
					@foreach( $tratamientos as $tratamiento )
					<tr>
						<td>
							<h2>{{$tratamiento-> tratamiento}}</h2>
						</td><td>
							<p class="lead">{{$tratamiento-> descripcion}}</p>
						</td>
						<td> 
						<form action="{{action('pacientesController@deleteTratamiento', $tratamiento->id)}}" 
							method="POST" style="display:inline">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit" class="btn btn-danger" style="display:inline">
								Borrar tratamiento
							</button>
						</form> 
					</td>
					</tr>
					
					@endforeach
				</tbody>
			</table>
		</div>
		<a href="{{URL::to('/paciente/tratamiento/' . $datos->id)}}">
			<button type="submit" class="btn btn-warning" style="display:inline">
				Nuevo tratamiento
			</button></a>
		</div>
	</div>

	@stop