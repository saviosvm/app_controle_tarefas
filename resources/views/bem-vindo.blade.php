Site da Aplicação.

@auth
    <h1>USUÁRIO AUTENTICADO</h1>
    <p>{{Auth::user()->id}}</p>
    <p>{{Auth::user()->name}}</p>
    <p>{{Auth::user()->email}}</p>
    
@endauth

@guest
    Olá visitante, tudo bem?
@endguest