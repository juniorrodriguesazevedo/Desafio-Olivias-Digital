@extends('layouts.main')

@section('title', 'Cliente')

@section('content')
    
<h1>Clientes</h1>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('client.show', $item->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('client.edit', $item->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection