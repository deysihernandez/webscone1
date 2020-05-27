@extends('connect.principal')

@section('title', 'Login')
    
@section('content')
<link rel="stylesheet" href="{{  url('/static/css/connect.css?v='.time()) }}">
<div class="box box_login shadow">
    <div class="header">
        <a href="{{ url('/') }}">
            <img src="{{ url('/static/images/logotipo.png') }}">
        </a>
    </div>
    <div class="inside">
    {!! Form::open(['url' => '/login']) !!}
    <label for="email">correo electronico</label>
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
        {!! form::password('password', ['class' => 'form-control','required']) !!}
    </div>
    {!! form::submit('Ingresar', ['class' => 'btn btn-success mtop16']) !!}
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
    <a href="{{ url('/register') }}">¿No tienes una cuenta?,Registrate</a>
    <a href="{{ url('/recover') }}">Recuperar contraseña</a>
</div>
</div>
</div>
@stop
