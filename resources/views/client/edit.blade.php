@extends('layouts.main')

@section('title', 'Cliente Editar')

@section('content')

<h1>Editar</h1>
    
{!!Form::open()->fill($data)->multipart()->route('client.update', [$data->id])->method('put')!!}
    @include('client._form')
{!!Form::close()!!}

@endsection