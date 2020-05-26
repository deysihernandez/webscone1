@extends('admin.dashboard')

@section('title', 'Especialidades')
    
@section('desarrollo')
<link rel="stylesheet" href="{{  url('/static/css/modales.css?v='.time()) }}">
<div class="container">
<div class="row">
     
<!--========== First Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Especialidades</h3>
   
    <div class="text-center">
        <a class="btn btn-outline-primary" href="#successModal" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i>registrar especialiades</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> [ × ] </button>
                    <h2><i class="glyphicon glyphicon-shopping-cart"></i>Registrando especialidades</h2>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                          <form action="" method="" name="">
                          <table class="table table-condensed"><thead>
                          <tr>
                          </tbody></table>
                          <p class='grandTotal'>ID-Especialidad<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                          <p class='grandTotal'>especialidad<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                          </form>
                        </div>
                      </div><!-- ends col-12 -->
                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary pull-right" data-next="modal">Actualizar</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

<!--========== Second Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Años lectivos</h3>
   
    <div class="text-center">
        <a class="btn btn-outline-primary" href="#warningModal" data-toggle="modal"><i class="glyphicon glyphicon-briefcase"></i>Registrar Años lectivos</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> [ × ] </button>
                    <h2><i class="glyphicon glyphicon-shopping-cart"></i>Registrando Años lectivos</h2>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <form action="" method="" name="">
                        <table class="table table-condensed"><thead>
                        <tr>
                        </tbody></table>
                        <p class='grandTotal'>ID-Especialidad<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                        <p class='grandTotal'>Año-lectivo<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                        </form>
                      </div>
                    </div><!-- ends col-12 -->

                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary pull-right" data-next="modal">Actualizar</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

<!--========== Third Modal ==========-->
<article class="col-md-4 well">
    <h3 class="page-header text-center">Secciones</h3>
   
    <div class="text-center">
        <a class="btn btn-outline-primary" href="#primaryModal" data-toggle="modal"><i class="glyphicon glyphicon-shopping-cart"></i>Registrar secciones</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="primaryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> [ × ] </button>
                    <h2><i class="glyphicon glyphicon-shopping-cart"></i>Registrando secciones</h2>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                          <form action="" method="" name="">
                          <table class="table table-condensed"><thead>
                          <tr>
                          </tbody></table>
                          <p class='grandTotal'>ID-Especialidad<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                          <p class='grandTotal'>Seccion<input type="text" class="form-control" id="validationDefault01" value="" required></p>
                          </form>
                        </div>
                      </div><!-- ends col-12 -->

                </div><div class="clearfix"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary pull-right" data-next="modal">Actualizar</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</article>

	</div>
</div>
<br><br>
<!-- inicio de tabla deregistro de especialidades secciones y años -->
<div class="table-responsive">
    <table border="2" class="table table-hover table-boreded">
    <thead bg-info>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Especialidades</th>
          <th scope="col">Años</th>
          <th scope="col">Secciones</th>
          <th colspan="2">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>software</td>
          <td>1º,2º,3º</td>
          <td>A,B,</td>
          <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-success">Editar</button></a></td>
          <td><a href="{{ url('/admin/user2/') }}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
        </tr>
        <tr>
          <th scope="row"></th>
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
@stop