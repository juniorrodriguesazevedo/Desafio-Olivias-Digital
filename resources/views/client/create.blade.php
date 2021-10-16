@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cadastrar Cliente</div>

                <div class="card-body">
                    @include('includes.alert')  

                    {!!Form::open()->multipart()->route('client.store')!!}
                        @include('client._form')
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection