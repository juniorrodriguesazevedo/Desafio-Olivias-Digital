@extends('layouts.main')

@section('title', 'Cliente Visualizando')

@section('content')

<h1>Visualizando</h1>
    
<div class="card text-center" style="width: 22rem;">
    <img src="{{ Storage::url($data->image) }}" class="card-img-top" alt="{{ $data->name }}">
    <div class="card-body">
      <strong>Nome: </strong> {{ $data->name }} <br>
      <strong>Email: </strong> {{ $data->email }} <br>

      {!!Form::open()->route('client.destroy', [$data->id])->method('delete')!!}
        {!!Form::submit("Deletar")->color('danger')!!}
      {!!Form::close()!!}
  </div>

@endsection