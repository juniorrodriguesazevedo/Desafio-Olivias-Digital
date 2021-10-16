@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Telefones</div>

                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection