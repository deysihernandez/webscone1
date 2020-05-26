@extends('connect.menu')

@section('title', 'ficha')

@section('desarrollo')
<link rel="stylesheet" href="{{  url('/static/css/cupo.css?v='.time()) }}">
<br><br>
<main class="page-content">
    <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
                <h5 class="card-header text-white">Encargado...</h5>
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
            <div class="card">
                <h5 class="card-header text-white">Estudiante...</h5>
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
        <br>
            <div class="card text-center">
                <div class="card-header text-white">Resultado de Evaluaciones</div>
                <div class="card-body">
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
                            </tr>
                            <tr>
                              <th scope="row"></th>
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
                            </tr>
                            <tr>
                              <th scope="row"></th>
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
                            </tr>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    
                </div>
                <div class="card-footer text-muted">
                27/04/2020
                </div>
              </div>
        </div>
</main>
@stop