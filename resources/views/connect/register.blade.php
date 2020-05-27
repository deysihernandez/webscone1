@extends('connect.principal')

@section('title', 'Registrarse')
    
@section('content')
<link rel="stylesheet" href="{{  url('/static/css/connect.css?v='.time()) }}">
<div class="box box_register shadow">
    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/images/logotipo.png') }}">
        </a>
    </div>
    <div class="inside">
    {!! Form::open(['url' => '/register']) !!}
    <label for="name">Nombre</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        {!! form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <label for="lastname"class="mtop16">Apellido</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
        </div>
        {!! form::text('lastname', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <label for="email" class="mtop16">correo electronico</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
        </div>
        {!! form::email('email', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <label for="password" class="mtop16">password</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        {!! form::password('password', ['class' => 'form-control', 'required']) !!}
    </div>

    <label for="cpassword" class="mtop16">Confirmar password</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        {!! form::password('cpassword', ['class' => 'form-control', 'required']) !!}
    </div>
    {!! form::submit('Registrarse', ['class' => 'btn btn-success mtop16']) !!}
{!! Form::close() !!}

@if(Session::has('message'))
<div class="container">

    <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display:none;">
        {{ Session::get('message') }}
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <script>
            $('.alert').slideDown();
            setTimeout(function(){ $('.alert').slideup(); }, 10000);
        </script>
    </div>
</div>
@endif

<div class="footer mtop16">
    <a href="{{ url('/login') }}">Ya tengo una cuenta,Ingresar</a>
    
</div>
</div>
</div>
@stop
