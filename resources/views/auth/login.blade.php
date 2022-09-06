@extends('layouts.default')

@section('title', 'Login')

@section('content')
    <section class="section1-login">
        <div class="div1-s1-login">
            <div class="div2-s1-image">
                <img class="login-image" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="form1-s1-login" action="{{url('/login')}}" method="post">
                @csrf
                <input type="email" name="email" placeholder="Email do treinador" autofocus required>
                <input type="password" name="password" placeholder="Senha" required minlength="8">
                <input type="submit" value="Entrar">
            </form>
            <div class="div3-s1-login">
                <p>Não possui uma conta?</p>
                <a href="{{url('/register')}}">Cadastre-se</a>
            </div>
        </div>
    </section>
@endsection