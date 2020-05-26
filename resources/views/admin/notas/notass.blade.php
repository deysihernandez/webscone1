@extends('admin.dashboard')

@section('title', 'Notas')
@section('desarrollo')
<br><br>
<main class="page-content">
    @section('desarrollo')
    <div class="container-fluid">
            <div class="card text-center">
                <div class="card-header text-dark"><b>Resultado de Evaluaciones</b></div>
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
     
  @show

</main>
@stop