@extends('connect.menu')

@section('title', 'cupos')
@section('desarrollo')
<link rel="stylesheet" href="{{  url('/static/css/cupo.css?v='.time()) }}">
<!-- sidebar-wrapper  -->
<br><br>
<main class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card text-dark bg-light border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-white">Bachillerato General</div>
            <div class="card-body">
              <h5 class="card-title">total 30</h5>
              <p class="card-text">alumnos matriculados 30</p>
              <center><a href="{{ url('/ficha') }}" target="_blank" class=" btn btn-outline-primary btn-md">0 cupos disponibles</a></center>
            </div>
          </div> 
                   
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card text-dark bg-light border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-white">Administrativo Contable</div>
            <div class="card-body">
              <h5 class="card-title">total 25</h5>
              <p class="card-text">aluMnos matriculados 5</p>
              <center><a href="{{ url('/ficha') }}" target="_blank" class=" btn btn-outline-primary btn-md">8 cupos disponibles</a></center>
            </div>
          </div>         
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card text-dark bg-light border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-white">Desarrollo software</div>
            <div class="card-body">
              <h5 class="card-title">total 30</h5>
              <p class="card-text">alumnos matriculados 4</p>
              <center><a href="{{ url('#') }}" target="_blank" class=" btn btn-outline-primary btn-md">8 cupos disponibles</a></center>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </main>
  <main class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card text-dark bg-light border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-white">Attencion primaria en salud</div>
            <div class="card-body">
              <h5 class="card-title">total 30</h5>
              <p class="card-text ">alumnos matriculados 6</p>
              <center><a href="{{ url('/ficha') }}" target="_blank" class=" btn btn-outline-primary btn-md">8 cupos disponibles</a></center>
            </div>
          </div>          
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card text-dark bg-light border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header text-white ">Mantenimiento Automotriz</div>
            <div class="card-body">
              <h5 class="card-title">total 40</h5>
              <p class="card-text">alumnos matriculados 29</p>
              <center><a href="{{ url('/ficha') }}" target="_blank" class=" btn btn-outline-primary btn-md">8 cupos disponibles</a></center>
            </div>
          </div>         
        </div>
      </div>
    </div>

  </main>
  <!-- page-content" -->
@stop
    