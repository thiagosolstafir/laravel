@extends('user.base')
@section('title', 'Criar Usuário')

@section('container')
    <h2>Create</h2>

    @if (count($errors) > 0)
        <div class="alert callout" data-closable>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="/user/add" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Senha">
        <input type="password" name="password_confirmation" placeholder="Repetir senha">
        <input type="submit" value="Cadasdrar">
    </form>
@endsection