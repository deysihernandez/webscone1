@extends('admin.dashboard')

@section('title', 'Notas')
    
@section('desarrollo')


<main class="page-content">

    <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card border-primary">
                <h5 class="card-header text-dark border-primary">Encargado...</h5>
              <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                    <div class="col">
                          <label for="inputPassword5">DUI:</label>
                          <input type="text" class="form-control" placeholder="Numero de DUI"value="">
                    </div>
                    <div class="col">
                          <label for="inputPassword5">Nombre completo:</label>
                          <input type="text" class="form-control" placeholder="Nombre completo"value="">
                    </div>
                    </div>
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                    <div class="col">
                          <label for="inputPassword5">Apellido completo:</label>
                          <input type="text" class="form-control" placeholder="Apellido complleto"value="">
                    </div>
                    <div class="col">
                          <label for="inputPassword5">Gmail:</label>
                          <input type="text" class="form-control" placeholder="Correo Electronico"value="">
                    </div>
                    </div>
                </h6>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card border-primary">
                <h5 class="card-header text-dark border-primary">Estudiante...</h5>
              <div class="card-body">                
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                    <div class="col">
                          <label for="inputPassword5">DUI:</label>
                          <input type="text" class="form-control" placeholder="Numero de DUI"value="">
                    </div>
                    <div class="col">
                          <label for="inputPassword5">Nombre completo:</label>
                          <input type="text" class="form-control" placeholder="Nombre completo"value="">
                    </div>
                    </div>
                </h6>
                <h6 class="card-subtitle mb-2 text-muted">
                    <div class="row">
                    <div class="col">
                          <label for="inputPassword5">Gmail:</label>
                          <input type="text" class="form-control" placeholder="Correo Electronico"value="">
                    </div>
                    <div class="col">
                          <label for="inputPassword5">Apellido completo:</label>
                          <input type="text" class="form-control" placeholder="Apellido completo"value="">
                    </div>
                    </div>
                </h6>               
              </div>
            </div>
          </div>
        </div>
        </div>
</main>
@stop