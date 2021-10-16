@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    @include('includes.alert')  

                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Tipo</th>
                          <th scope="col" style="width: 22%">Opções</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $item)
                              <tr>
                                  <th scope="row">{{ $item->id }}</th>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->type_client_id == 1 ? 'Pessoa Física' : 'Pessoa Jurídica' }}</td>
                                  <td>
                                      <a class="btn btn-success" href="{{ route('client.show', $item->id) }}">Ver</a>
                                      <a class="btn btn-primary" href="{{ route('client.edit', $item->id) }}">Editar</a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                    </table>

                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection