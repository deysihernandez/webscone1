@extends('admin.dashboard')

@section('title', 'Especialidades')
    
@section('desarrollo')
<link rel="stylesheet" href="{{  url('/static/css/matricula.css?v='.time()) }}">

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Encargado</h3>
            <hr>
            <form>
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
                 <div class="row">
                    <div class="col">
                      <label for="inputPassword5">Apellido completo:</label>
                      <input type="text" class="form-control" placeholder="Apellido completo"value="">
                 </div>
                 <div class="col">
                      <label for="inputPassword5">Fecha Nacimiento:</label>
                      <input type="text" class="form-control" placeholder="Fecha de nacimiento"value="">
                 </div>
                 </div>
                 <div class="row">
                    <div class="col">
                      <label for="inputPassword5">Lugar Nacimiento:</label>
                      <input type="text" class="form-control" placeholder="Lugar denacimiento"value="">
                 </div>
                 <div class="col">
                      <label for="inputPassword5">Sexo:</label>
                      <select id="inputState" class="form-control"value="">
                        <option selected>Elige el Genero...</option>
                        <option>Feminino</option>
                        <option>Masculino</option>
                      </select>
                 </div>
                 </div>
                 <div class="row">
                    <div class="col">
                      <label for="inputPassword5">Tel:/celular:</label>
                      <input type="text" class="form-control" placeholder="Numero de tel:/celular"value="">
                 </div>
                 <div class="col">
                      <label for="inputPassword5">Gmail:</label>
                      <input type="text" class="form-control" placeholder="Correo electronico"value="">
                 </div>
                 </div>
                 <div class="row">
                    <div class="col">
                      <label for="inputPassword5">Direccion:</label>
                      <input type="text" class="form-control" placeholder="Direccion correcta"value="">
                 </div>
                 <div class="col">
                      <label for="inputPassword5">Profesion/oficio:</label>
                      <input type="text" class="form-control" placeholder="Profesion u Oficio"value="">
                 </div>
                 </div>
                 <div class="row">
                    <div class="col">
                      <label for="inputPassword5">Nacionalidad:</label>
                      <input type="text" class="form-control" placeholder="Nacionalidad"value="">
                 </div>
                 <div class="col">
                      <label for="inputPassword5">Estado Familiar:</label>
                      <input type="text" class="form-control" placeholder="Estado familiar"value="">
                 </div>
                 </div>
                 <br><hr>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Guardar datos del encargado" />
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Alumnos</h3>
            <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">NIE:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="NIE"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Nombre completo:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Nombre completo"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Apellido completo:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Apellido completo"value="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Fecha Nacimiento:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Fecha de nacimiento"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Partida Nacimiento:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Partida de nacimiento"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Sexo:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Genero"value="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Tel:/celular:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Telefono u celular"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Gmail:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Correo electronico"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Direccion:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Direccion correcta"value="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Estudio parvularia?:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Estudio parvularia?"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Repite Grado?:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Repite grado?"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Tipo sangre:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Tipo de sangre"value="">
                    </div>
                  </div>
                 <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Residencia:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Urbana/Rural"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Nacionalidad:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Nacionalidad"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputZip">Parentesco:</label>
                      <input type="text" class="form-control" id="inputZip" placeholder="Parentesco"value="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label for="inputState">Departamento de nacimiento:</label>
                      <select id="inputState" class="form-control"value="">
                        <option selected>Elige departamento...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="inputState">Municipio de nacimiento:</label>
                      <select id="inputState" class="form-control"value="">
                        <option selected>Elige municipio...</option>
                        <option>...</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Ctro/Procedencia:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Centro Escolar"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Estado familiar:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Estado familiar"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Diascapacidad:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Tipo discapacidad"value="">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity">Tipo transporte:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Tipo transporte"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Padre del Alumno:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Padre"value="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Madre del alumno:</label>
                      <input type="text" class="form-control" id="inputCity" placeholder="Madre"value="">
                    </div>
                  </div>
                  <hr>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Guardar datos del alumno" />
                </div> 
            </form>
        </div>
    </div>
</div>
@stop