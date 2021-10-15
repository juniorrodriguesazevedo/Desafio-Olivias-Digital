<div>
    <div class="col-md-4">
        {!!Form::text('name', 'Nome')->required()!!}
    </div>
    <div class="col-md-4">
        {!!Form::text('email', 'Email')->type('email')->required()!!}
    </div>
    <div class="col-md-4">
        {!!Form::select('type_client_id', 'Tipo de Pessoa', [1 => 'Pessoa Física', 2 => 'Pessoa Jurídica'])->required()!!}
    </div>
    <div class="col-md-4">
        {!!Form::file('image', 'Imagem')->required()!!}
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>