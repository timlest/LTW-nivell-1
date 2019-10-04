       @extends('layouts.master')

       @section('content')

       <div class="content">
        <br>
        <div class="row">
          <table class="table" style="border: 1px solid black;">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Nacimiento</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $arrayPacientes as $paciente )
              <tr>   
               <th scope="row">{{$paciente->id}}</th>
               <td>{{$paciente->nombre}}</td>
               <td>{{$paciente->apellidos}}</td>
               <td>{{$paciente->nacimiento}}</td>

               <td> 
                <a href="{{ URL::to('/pacientes/' . $paciente->id )}}" >
                  <button type="submit" class="btn btn-info" style="display:inline">
                    Ver
                  </button></a>
                  <a href="{{URL::to('/paciente/edit/' . $paciente->id)}}">
                    <button type="submit" class="btn btn-warning" style="display:inline">
                      Editar
                    </button></a>
                    <form action="{{action('pacientesController@deletePaciente', $paciente->id)}}" 
                      method="POST" style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger" style="display:inline">
                        Borrar paciente
                      </button>
                    </form> 
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>



      </div>

      @stop