@extends('admin.dashboard')

@section('title', 'Alumnos')
    
@section('desarrollo')
<ul class="nav nav-tabs bg-light">
  <li class="nav-item">
    <a class="nav-link active"  href="{{ url('/admin/primerogeneral/') }}">1º General seccion (A)...</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/admin/primerogeneral2') }}">1º General seccion (B)...</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/admin/primerogeneral3') }}">1º General seccion (C)...</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/admin/segundogeneral') }}">2º General seccion (A)...</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/admin/segundogeneral2') }}">2º General seccion (B)...</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/admin/segundogeneral3') }}">2º General seccion (C)...</a>
  </li>
</ul>
<div class="card text-center">
    <div class="card-header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Listado de estudiantes de 1º General (A)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table border="2" class="table table-hover table-boreded">
            <thead bg-info>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NIE</th>
                  <th scope="col">Nombre completo</th>
                  <th scope="col">Apellido completo</th>
                  <th colspan="3">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>345627</td>
                  <td>deysi liseth</td>
                  <td>hernandez aguilar</td>
                  <td><a href="{{ url('/admin/notas/') }}"><button type="button" class="btn btn-success">Notas</button></a></td>
                  <td><a href="{{ url('/admin/informacion/') }}"><button type="button" class="btn btn-info">Informacion</button></a></td>
                  <td><a href="{{ url('/#') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="{{ url('/admin/notas/') }}"><button type="button" class="btn btn-success">Notas</button></a></td>
                  <td><a href="{{ url('/admin/informacion/') }}"><button type="button" class="btn btn-info">Informacion</button></a></td>
                  <td><a href="{{ url('/#') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                </tr>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
    <div class="card-footer text-muted">
      Instituto Nacional de sonzacate
    </div>
  </div>
  
@stop