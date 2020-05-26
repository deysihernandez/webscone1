@extends('admin.dashboard')

@section('title', 'user')
    
@section('desarrollo')
<main role="main-responsive" class="container">
    
    <div class="btnn-responsive">  
  <nav class="navbar navbar-light" >
    <a class="navbar-brand">Administradores</a>
       <form class="btnn">
             <div class="btnn mr-sm-2">
              <a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-outline-info">Registrar Usuarios</button></a>
             </div>
       </form>
  </nav>
    </div>
    <br>
    <div class="jumbotron text-center">
        <div class="table-responsive">
            <table border="2" class="table table-hover table-boreded">
            <thead bg-info>
                <tr>
                  <th scope="col">Usuario</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Gmail</th>
                  <th scope="col">Contraseña</th>
                  <th colspan="2">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">deysi</th>
                  <td>deysi liseth</td>
                  <td>hernandez aguilar</td>
                  <td>deysi234@gal.com</td>
                  <td>********</td>
                  <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Editar</button></a></td>
                  <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Editar</button></a></td>
                  <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                </tr>
            
            
                </tr>
              </tbody>
            </table>
          </div>
    </div>
    </main>
@stop
