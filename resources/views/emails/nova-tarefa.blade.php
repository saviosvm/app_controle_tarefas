@component('mail::message')
# {{$tarefa}}

Data Limite de conclusão: {{$data_limite_conclusao}}
@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

att,<br>
{{ config('app.name') }}
@endcomponent
