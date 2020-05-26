@extends('admin.dashboard')

@section('title', 'Informacion/alumno')
    
@section('desarrollo')
<main class="page-content">
<div class="container-fluid">
<div class="card text-center">
<div class="card-header text-dark"><b>Informacion sobre datos de el encargado</b></div>
<div class="card-body">
<div class="table-responsive">
<table border="2" class="table">
    <thead bg-info>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">DUI</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Fech-Nac</th>
          <th scope="col">Lugar-Nac</th>
          <th scope="col">Sexo</th>
          <th scope="col">Celular</th>
          <th scope="col">Gmail</th>
          <th scope="col">Direccion</th>
          <th scope="col">Profesion/oficio</th>
          <th scope="col">Nacionalidad</th>
          <th scope="col">Estado-fami</th>
          <th colspan="2">Opcion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>
        </tr>
        </tr>
      </tbody>
    </table>
</div>
</div>
</div>
<div class="card text-center">
  <div class="card-header text-dark"><b>Informacion sobre los datos de el alumno</b></div>
  <div class="card-body">
  <div class="table-responsive">
      <table border="2" class="table">
      <thead bg-info>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NIE</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fech-Nac</th>
            <th scope="col">Partida</th>
            <th scope="col">Sexo</th>
            <th scope="col">Celular</th>
            <th scope="col">Gmail</th>
            <th scope="col">Direccion</th>
            <th scope="col">Est-parvularia</th>
            <th scope="col">Rept-Grado</th>
            <th scope="col">Tip-sangre</th>
            <th scope="col">Residencia</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Parentesco</th>
            <th scope="col">Departamento</th>
            <th scope="col">Municipio</th>
            <th scope="col">Cntro-procedencia</th>
            <th scope="col">Estd-familiar</th>
            <th scope="col">Discapacidad</th>
            <th scope="col">Tip-transporte</th>
            <th scope="col">Padre</th>
            <th scope="col">Madre</th>
            <th colspan="2">Opcion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>          
            <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>        
          </tr>
          </tr>
        </tbody>
      </table>
</div>
</div>
</div>
</main>
@stop