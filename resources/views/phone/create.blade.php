@extends('layouts.main')

@section('title', 'Telefone Vincular')

@section('content')

<h1>Telefone Vincular</h1>
    
{!!Form::open()->route('phone.store')!!}
    @include('phone._form')
{!!Form::close()!!}

@endsection