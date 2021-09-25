@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta Pouco Agora!! Valide seu email.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Enviamos um email para você, confirme ele por favor.
                        </div>
                    @endif

                    Antes de utilizar os recursos da aplicação, por favor valide seu email por meio do link de verificaçã que te enviamos.
                    Caso não tenharecebido um email de verificação por favor clique aqui.
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
