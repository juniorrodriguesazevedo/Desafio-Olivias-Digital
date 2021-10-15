@extends('layouts.main')

@section('title', 'Cliente Cadastro')

@section('content')

<h1>Cadastro</h1>
    
{!!Form::open()->multipart()->route('client.store')!!}
    @include('client._form')
{!!Form::close()!!}


@endsection