@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
	<div >
		<div class="card">
			<div class="card-header text-center">
				Añadir tratamiento
			</div>
			<div class="card-body" style="padding:30px">

				<form action="{{ url('paciente/tratamiento/' . $paciente->id) }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="tratamiento">tratamiento</label>
						<input type="text" name="tratamiento" id="tratamiento" class="form-control">
						
					</div>

					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción"></textarea>
						 
					</div>


					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir tratamiento
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>


@stop
