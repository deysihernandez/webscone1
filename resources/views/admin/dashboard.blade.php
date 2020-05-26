@extends('admin.index')

@section('title', 'dashboard')
    
@section('content')


  <div id="wrapper" class="animate">
    <nav class="navbar header-top fixed-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{ url('/admin/') }}">
        <i class="fa fa-home"></i>
         Inicio
      <span class="sr-only">(current)</span>
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarText">
        <!--Menu vertical-->
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item active">
            <a class="nav-link">            
               Notas            
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" title="Notas..." id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i><span class="ttip">
            Desarrollo Software
          </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-item active" >Secciones</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/primerosoftwarenotas/') }}">1º Desarrollo de Software (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundosoftwarenotas/') }}">2º Desarrollo de Software (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/tercerosoftwarenotas/') }}">3º Desarrollo de Software (A)</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" title="Notas..." id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i><span class="ttip">
             Administrativo contable
          </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-item active" >Secciones</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/primerocontablenotas/') }}">1º Administrativo contable (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundocontablenotas/') }}">2º Administrativo contable (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/tercerocontablenotas/') }}">3º Administrativo contable (A)</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" title="Notas..." id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i><span class="ttip">
            Bchillerato General
          </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-item active" >Secciones</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/primerogeneralnotas/') }}">1º Bachilleato General (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/primerogeneral2notas/') }}">1º Bachillerato General (B)</a>
            <a class="dropdown-item" href="{{ url('/admin/primerogeneral3notas/') }}">1º Bachillerato General (C)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundogeneralnotas/') }}">2º Bachilleato General (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundogeneral2notas/') }}">2º Bachillerato General (B)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundogeneral3notas/') }}">2º Bachillerato General (C)</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" title="Notas..." id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i><span class="ttip">
             Mantenimiento Automotriz
          </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-item active" >Secciones</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/primeromantenimientonotas/') }}">1º Mantenimiento Automotriz (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundomantenimientonotas/') }}">2º Mantenimiento Automotriz (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/terceromantenimientonotas/') }}">3º Mantenimiento Automotriz (A)</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" title="Notas..." id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i><span class="ttip">
             Atencion Primaria en Salud
          </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-item active" >Secciones</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/admin/primerosaludnotas/') }}">1º Atencion primaria en salud (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/segundosaludnotas/') }}">2º Atencion primaria en salud (A)</a>
            <a class="dropdown-item" href="{{ url('/admin/tercerosaludnotas/') }}">3º Atencion primaria en salud (A)</a>
          </div>
        </li>
        </ul>
        <!--/Fin del Menu vertical-->
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin/users/') }}">
              <i class="fas fa-user"></i>
              Administradores
             <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-address-card"></i>
              Matriculas
              <span class="sr-only">(current)</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <h6 class="dropdown-item active" >Especialidades</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/matricula1/') }}">Desarrollo de Software</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/matricula1/') }}">Administrativo Contable</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/matricula1/') }}">Bachillerato General</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/matricula1/') }}">Mantenimiento Automotriz</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/matricula1/') }}">Atencion Primaria en salud</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin/especialidades/') }}">
              <i class="fab fa-accusoft"></i>
             Agregar Especialidades
            <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-users"></i>
              Total Alumnos
            </a>
            <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="navbarDropdownMenuLink">
              <h6 class="dropdown-item active" >Especialidades</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/primerosoftware/') }}">Desarrollo de Software</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/primerocontable/') }}">Administrativo Contable</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/primerogeneral/') }}">Bachillerato General</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/primeromantenimiento/') }}">Mantenimiento Automotriz</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/admin/primerosalud/') }}">Atencion Primaria en salud</a>
            </div>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-bell"></i>
              
              Notificaciones
            </a>
            <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="navbarDropdownMenuLink">           
              <a class="dropdown-item" href="#">
              <i class="fas fa-key"></i>Something else here</a>
          <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
              <i class="fas fa-key"></i>Something else here</a>
          </div>
          </li>   
          <li class="nav-item active dropdown">
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle"></i>
            perfil
           </a>
        <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
             <h6 class="dropdown-item active">Administrador</h6>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Configuracion</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Manual</a>
             <a class="dropdown-item" href="#"><i class="fas fa-key"></i>Salir</a>        
        </div>
        </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">   
    @section('desarrollo')
   
    @show    
  </div>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
@stop
