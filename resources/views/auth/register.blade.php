@extends('layouts.default')

@section('title', 'Cadastre-se')

@section('content')
    <section class="section-register">
        <div class="section_div-register">
            <div class="section_div_image-register">
                <img class="section_div_image_pokeball-register" src="../../img/pokeball.png" alt="logo">
            </div>
            <form class="section_div_form-register" action="{{url('/register')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Seu nome de treinador" autofocus required>
                <input type="email" name="email" placeholder="Seu email" required>
                <input type="password" name="password" placeholder="Sua senha" required minlength="8">
                <input type="password" name="password_confirmation" placeholder="Confirmar senha" required minlength="8">

                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </section>
@endsection