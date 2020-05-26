@extends('connect.principal')

@section('title', 'menu')
@section('content')
 <link rel="stylesheet" href="{{  url('/static/css/menu.css?v='.time()) }}">

  <nav class="navbar navbar-expand-lg ">
  </nav>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
          <div class="sidebar-content">
            <div class="sidebar-brand">
              <a>WEBSCONE</a>
              <div id="close-sidebar">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="sidebar-header">
              <div class="user-pic">
              <img class="img-responsive img-rounded" src="{{ url('static/images/logotipo.png') }}"
                  alt="User picture">
              </div>
              <div class="user-info">
                <span class="user-name">{{ Auth::user()->name }}
                  <strong></strong>
                </span>
                <span class="user-role">Bienvenidos/as</span>
                <span class="user-status">
                  <i class="fas fa-circle"></i>
                  <span>Online</span>
                </span>
              </div>
              <div class="user-email">
              <span class="user-email">{{ Auth::user()->email }}
              </div>
            </div>
            <div class="sidebar-menu">
              <ul>
                <li>
                  <a href="{{ url('/cupos') }}">
                    <i class="fas fa-address-card"></i>
                    <span>Matricula</span>
                  </a>
                </li>
                <li class="header-menu">
                  <span>Vista de Notas</span>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Bachillerato General</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="{{ url('/form') }}">1ºGeneral (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">1ºGeneral (B)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">1ºGeneral (C)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºGeneral (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºGeneral (B)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºGeneral (C)</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Administrativo contable</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="{{ url('/form') }}">1ºContable (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">1ºContable (B)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºContable (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºContable (B)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">3ºContable (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">3ºContable (B)</a>
                      </li>
                    </ul>
                  </div>
                </li>
                 <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Desarollo software</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="{{ url('/form') }}">1ºSoftware (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºSoftware (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">3ºSoftware (A)</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Attencion primaria en salud</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="{{ url('/form') }}">1ºSalud (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºSalud (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">3ºSalud (A)</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="sidebar-dropdown">
                  <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Mantenimiento Automotriz</span>
                  </a>
                  <div class="sidebar-submenu">
                    <ul>
                      <li>
                        <a href="{{ url('/form') }}">1ºMantenimiento (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">2ºMantenimiento (A)</a>
                      </li>
                      <li>
                        <a href="{{ url('/form') }}">3ºMantenimiento (A)</a>
                      </li>
                    </ul>
                  </div>
                </li>
               
              </ul>
            </div>
            <!-- sidebar-menu  -->
          </div>
          <!-- sidebar-content  -->
          <div class="sidebar-footer">            
            <!-- sidebar-header  -->
            <div class="sidebar-search">
              <div>
                <div class="input-group">
                  
                <a href="{{ url('/login') }}" target="_blank" class=" btn btn-outline-light btn-md"><b>Cerar Cession...</b><i class="fas fa-sign-in-alt"></i></a>
                </div>
              </div>
            </div>
            <!-- sidebar-search  -->
            <!---<a href="#">
              <i class="fa fa-bell"></i>
              <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
              <i class="fa fa-envelope"></i>
              <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
              <i class="fa fa-cog"></i>
              <span class="badge-sonar"></span>
            </a>
            <a href="#">
              <i class="fa fa-power-off"></i>
            </a>-->
          </div>
        </nav>
        @section('desarrollo')
  
        @show
        
    </div>
    <!-- page-wrapper -->
@stop