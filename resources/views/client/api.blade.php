@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">API</div>

                <div class="card-body">
                    <h3>Teste no Postman</h3>
                    <p>O Postman é um aplicativo que facilita o desenvolvimento da API. Ele fornece o ambiente necessário para testar APIs à medida que você as desenvolve.</p>

                    <p><b>Link da API:</b> http://127.0.0.1:8000/api/client</p>

                    <h3>Login de usuário</h3>
                    <p>
                        <b>Ponto final:</b> 127.0.0.1:8000/api/login <br>
                        <b>Método:</b> POST <br>
                        <b>Carga útil:</b> <br>
                        <b>email:</b> admin@gmail.com <br>
                        <b>password:</b> admin <br>
                        <b>OBS: </b> Usuário já cadastrado no sistema com os dados acima
                    </p>
                    <img src="https://i.postimg.cc/mr3pfByy/postmantoded.png" alt=""> 
                    
                    <br>
                    <br>

                    <b>Fonte: </b> <a href="https://medium.com/laravel-api-autentica%C3%A7%C3%A3o-jwt/neste-artigo-veremos-como-usar-o-jwt-para-proteger-nossas-apis-do-laravel-a376cae05627" target="_blank" rel="noopener noreferrer">https://medium.com/laravel-api-autentica%C3%A7%C3%A3o-jwt/neste-artigo-veremos-como-usar-o-jwt-para-proteger-nossas-apis-do-laravel-a376cae05627</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection