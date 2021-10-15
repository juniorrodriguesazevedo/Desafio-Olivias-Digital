@extends('layouts.main')

@section('title', 'Telefones')

@section('content')
    
<h1>Telefones</h1>

@include('includes.alert')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Telefones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $item->phone }}</th>
            </tr>
        @endforeach
    </tbody>
  </table>

  {{ $data->links() }}

@endsection