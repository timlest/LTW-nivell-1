@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
	<div>
		<div class="card">
			<div class="card-header text-center">
				Modificar Paciente
			</div>
			<div class="card-body" style="padding:30px">

				<form action="{{ url('paciente/edit/' . $paciente->id) }}" method="POST">
					{{method_field('PUT')}}
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="{{$paciente->nombre}}">
						 @if ($errors->has('nombre'))
                            <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
                        @endif
					</div>

					<div class="form-group">
						<label for="apellidos">Apellidos</label>
						<input type="text" name="apellidos" id="apellidos" class="form-control" value="{{$paciente->apellidos}}">
						@if ($errors->has('apellido'))
                            <small class="form-text text-danger">{{ $errors->first('apellido') }}</small>
                        @endif
					</div>

					<div class="form-group">
						<label for="director">Nacimiento</label>
						<input type="date" name="nacimiento" id="nacimiento" class="form-control" value="{{$paciente->nacimiento}}">
						 @if ($errors->has('aniversario'))
                            <small class="form-text text-danger">{{ $errors->first('aniversario') }}</small>
                        @endif
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Modificar Paciente
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>

@stop