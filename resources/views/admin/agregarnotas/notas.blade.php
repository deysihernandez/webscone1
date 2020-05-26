@extends('admin.dashboard')

@section('title', 'Notas')
    
@section('desarrollo')


<main class="page-content">
        
     
    <div class="container-fluid">
            <div class="card text-center border-primary">
                <div class="card-header text-dark border-primary">
                    <div class="ID-alumno">
                        <span class="user-name">{{ Auth::user()->email }}
                    </div>             
                </div>              
                <div class="card-body border-primary">
                    <div class="table-responsive">
                        <table border="2" class="table">
                        <thead bg-info>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Materias</th>
                              <th colspan="3">1º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">2º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">3º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">4º Periodo</th>
                              <th scope="col">NP</th>
                              <th scope="col">NF</th>
                              <th colspan="4">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>matematicas</td>
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
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Agregar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>estudios sociales</td>
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
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Agregar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                            </tr>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table border="2" class="table">
                        <thead bg-info>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Modulos</th>
                              <th colspan="3">1º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">2º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">3º Periodo</th>
                              <th scope="col">NP</th>
                              <th colspan="3">4º Periodo</th>
                              <th scope="col">NP</th>
                              <th scope="col">NF</th>
                              <th colspan="4">Opciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Desarrollo debase de datos</td>
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
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Agregar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                              
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td>Creacion depaginas web</td>
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
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Agregar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-info">Editar</button></a></td>
                              <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-outline-danger">Eliminar</button></a></td>
                            </tr>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    
                </div>
                <div class="card-footer text-muted border-primary">
                27/04/2020
                </div>
              </div>
        </div>
</main>
@stop