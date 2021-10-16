@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><b>Cliente:</b> {{ $data->name }}</div>

                <div class="card-body">
                    @include('includes.alert')  

                    <div class="container text-center">
                      <div class="row">
                        <div class="col-6">
                          <div class="card" style="width: 400px;">
                            <img src="{{ Storage::url($data->image) }}" class="card-img-top" alt="{{ $data->name }}">
                            <div class="card-body">
                              <strong>Nome: </strong> {{ $data->name }} <br>
                              <strong>Email: </strong> {{ $data->email }} <br>
                              <strong>Tipo: </strong> {{ $data->type_client_id == 1 ? 'Pessoa Física' : 'Pessoa Jurídica' }} <br>
                              <br>
                              {!!Form::open()->route('client.destroy', [$data->id])->method('delete')!!}
                                {!!Form::submit("Deletar")->color('danger')!!}
                              {!!Form::close()!!}
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <table class="table table-sm">
                            <thead>
                              <tr>
                                <th scope="col">Telefones Vinculados</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data->phones as $item)
                                <tr>
                                  <td>{{ $item->phone }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection