@extends('layouts.forms')
 
@section('title', 'Cadastro')

@section('style')
<style>
    body{
        background-image: url("{{ asset('img/Fundo.png') }}");
        background-size: 100%;  /* A imagem cobrirá todo o fundo */
        background-position: center; /* Centraliza a imagem */
        background-repeat: no-repeat; /* Evita repetição da imagem */
    }
</style>
@endsection

@section('form_content')
    <div class="form-group mb-3">
        <label class="form-label" for="Nome"><b>Nome:</b></label>
        <input class="form-control shadow-lg" type="text" name="name" placeholder="Digite o Nome" required>       
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Email"><b>E-mail:</b></label>
        <input class="form-control shadow-lg" type="email" name="email" placeholder="Digite o Email" required>
    </div>
    <div class="form-group mb-3">
        <label class="form-label" for="Password"><b>Senha:</b></label>
        <input class="form-control shadow-lg" type="password" name="password" placeholder="Digite a Senha" required>
    </div>
    <div class="form-group mb-5">
        <label class="form-label" for="Password_confirmation"><b>Confirmar Senha:</b></label>
        <input class="form-control shadow-lg" type="password" name="password_confirmation" placeholder="Confirme a Senha" required>
    </div>
    <center>
        <button type="submit" class="btn btn-success w-50 shadow-lg mb-4"><b>Cadastra-se</b></button>
        <p>Voçê já tem uma conta? <a href="{{url('/user/login')}}" class="text-decoration-none link-success"><b>Login</b></a></p>
    </center>
@endsection