@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Vincular Telefone</div>

                <div class="card-body">
                    @include('includes.alert')  

                    {!!Form::open()->route('phone.store')!!}
                        @include('phone._form')
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection