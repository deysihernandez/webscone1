@extends('connect.principal')

@section('content')
<div class="container" style="padding-bottom: 80px; margin-top: 90px; box-shadow: 0 1px 6px 0 rgba(32, 33, 36, .38); width: 450px; background-color: rgb(242, 242, 242);">
<div class="" style="display: flex; justify-content: center; align-items: center; padding-top: 50px; padding-bottom: 25px; opacity: 80%;">
    <img src="{{ url('/static/images/logotipo.png') }}" style="border-radius: 50%; width: 60%;">
</div>
<div class="input-group m-b-4" style="width: 85%; margin-left: 8%;">
    <div class="input-group-prepend" style="cursor: pointer;">
        <div class="input-group-text"><i class="fas fa-search"></i></div>
    </div>
    <input type="text" class="form-control" placeholder="Ingresar NIE" style="width: 60px;">
</div>
</div>    
@endsection
