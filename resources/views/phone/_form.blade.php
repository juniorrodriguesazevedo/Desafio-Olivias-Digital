<div>
    <div class="col-md-4">
        {!!Form::select('client_id', 'Cliente')->options($client->prepend('Selecione Cliente', ''))!!}
    </div>
    <div class="col-md-4">
        {!!Form::select('phone_id', 'Telefone')->options($phone->prepend('Selecione Telefone', ''), 'phone')!!}
    </div>
    <div class="col">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="{{ route('client.index') }}">Volta</a>
    </div>
</div>