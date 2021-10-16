@component('mail::message')
# Olá, {{ $user->name }}.

<img src="https://i.imgur.com/RauoZFx.png" alt="Boas Vindas pra você" style="width: 40%">

@component('mail::button', ['url' => $url])
Clique aqui para acessar o site
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
