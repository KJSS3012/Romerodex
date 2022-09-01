@extends('layouts.default')

@section('title', 'Error')

@section('content')
    <header class="header-error">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
    </header>
    <main class="main-error">
        <section class="section1-error">
            <img src="../img/pikachu.png" alt="" class="image-s1-error">
        </section>
        <section class="section2-error">
            <div class="div1-m-error">
                <h1 class="h1-s2-error">ERRO 404</h1>
            </div>
            <div class="div2-m-error">
                <p class="p-error">Pagina não encontrada! Por favor cheque sua internet e tente novamente.</p>
            </div>
        </section>
    </main>
    <footer class="footer-error">
        <div class="div1-f-error"></div>
        <div class="div2-f-error"></div>
    </footer>
@endsection