@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><b>Editando Cliente:</b> {{ $data->name }}</div>

                <div class="card-body">
                    @include('includes.alert')  

                    {!!Form::open()->fill($data)->multipart()->route('client.update', [$data->id])->method('put')!!}
                        @include('client._form')
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection