@component('mail::message')
# introdução

O corpo da mensagem

- opção 1
- opção 2
- opção 3

@component('mail::button', ['url' => ''])
Texto do botão 1
@endcomponent

@component('mail::button', ['url' => ''])
Texto do botão 2
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
