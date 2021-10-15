<div>
    <div class="col-md-4">
        {!!Form::select('client_id', 'Selecionar Cliente')->options($client)!!}
    </div>
    <div class="col-md-4">
        {!!Form::select('phone_id', 'Selecionar Telefone')->options($phone, 'phone')!!}
    </div>
    <div class="col">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="{{ route('client.index') }}">Volta</a>
    </div>
</div>