@extends('admin.dashboard')

@section('title', 'inicio')

@section('desarrollo')
<main role="main-responsive" class="container">
   <div class="btnn-responsive">
      <nav class="navbar navbar-light" >
         <a class="navbar-brand"></a>
            <form class="btnn">
            <div class="btnn mr-sm-2">
            <a href="{{ url('/admin/nuevoestudiante/') }}"> <button type="button" class="btn btn-outline-info">Agregar Nuevo Estudiante</button><a>
            </div>
           </form>
     </nav>
   </div>
   <br>
   <div class="jumbotron text-center">
<div class="table-responsive">
    <table border="2" class="table table-hover ">
      <thead class="thead-info">
        <tr>
            <th><center>Especialidades</th></center>
            <th><center>Alumnos registrados</th></center>
            <th><center>Mostrar cupos Disponibles</th></center>
        </tr>
       </thead>
        <tbody>
        <tr>
            <td>Desarrollo de software</td>
            <td>80</td>
            <td>
               <div class="btn-group" role="group">
                   <button id="btnGroupDrop10" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Total de cupos
                   </button>
                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                      <a class="dropdown-item" href="#">Dropdown link</a>
                      <a class="dropdown-item" href="#">Dropdown link</a>
                   </div>
              </div> 
            </td>
        </tr>
        <tr> 
            <td> Administrativo contable</td>
            <td>25</td>
            <td>
               <div class="btn-group" role="group">
                   <button id="btnGroupDrop10" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Total de cupos
                   </button>
                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                      <a class="dropdown-item" href="#">Dropdown link</a>
                      <a class="dropdown-item" href="#">Dropdown link</a>
                   </div>
              </div> 
            </td>                    
        </tr>
        <tr>
            <td>Bachillerato general</td>
            <td>5</td>
            <td>
               <div class="btn-group" role="group">
                   <button id="btnGroupDrop10" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Total de cupos
                   </button>
                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                      <a class="dropdown-item" href="#">Dropdown link</a>
                      <a class="dropdown-item" href="#">Dropdown link</a>
                   </div>
              </div> 
            </td>                      
        </tr>
        <tr> 
            <td>Mantenimiento Automotriz </td>
            <td> 34</td>
            <td> 
               <div class="btn-group" role="group">
                   <button id="btnGroupDrop10" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Total de cupos
                   </button>
                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                      <a class="dropdown-item" href="#">Dropdown link</a>
                      <a class="dropdown-item" href="#">Dropdown link</a>
                   </div>
              </div> 
            </td>                         
        </tr>
        <tr>
            <td>Atencion primaria en salud </td>
            <td> 45</td>
            <td> 
               <div class="btn-group" role="group">
                    <button id="btnGroupDrop10" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Total de cupos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop10">
                       <a class="dropdown-item" href="#">Dropdown link</a>
                       <a class="dropdown-item" href="#">Dropdown link</a>
                    </div>
               </div> 
            </td>                           
        </tr>           
       </tbody>
    </table> 
   </div>
</div>
</main>
@stop
