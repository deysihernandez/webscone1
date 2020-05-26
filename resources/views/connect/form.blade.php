@extends('connect.menu')

@section('title', 'form')
    
@section('desarrollo')
<link rel="stylesheet" href="{{  url('/static/css/form.css?v='.time()) }}">
<br><br>
<main class="page-content">
<div class="container-fluid">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card border-dark">
			<div class="card-header border-dark">
				<h3>¿Estas Registrado?</h3>
			</div>
			<div class="card-body">
				<form>
                    <label for="name">Numero de DUI</label>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Numero de identificacion del encargado">
						
                    </div>
                    <label for="name">Numero de NIE</label>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Numero de ientificacion del estudiate/@">
						
                    </div>
                    <label for="name">Nombre y Apellido del estudiante/@</label>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Nombre y apellido completo">
                    </div>
                 				
			  </div>
			<div class="card-footer">
                <div class="form-group">
                    <input type="submit" value="Acceder a mi busqueda" class="btn float-right login_btn">
                </div>	
            </div>
        </form>
		</div>
	</div>
</div>
</div>
</main>
@stop
