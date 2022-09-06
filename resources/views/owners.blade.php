@extends('layouts.default')

@section('title', 'Owners')

@section('content')
    <header class="header-owners">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <button class="button-h" onclick="link_homepage()">Voltar</button>
    </header>
    <main class="main-owners">
        <section class="section1-owners">
            <p class="p-owners">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat massa, pulvinar in arcu at, aliquet tempus lacus. Morbi dictum interdum velit vitae porttitor. Nam non turpis urna. Donec efficitur vitae quam ac accumsan. Proin egestas ornare facilisis. Aliquam erat volutpat. Integer eget egestas mi. Vestibulum ullamcorper at est in accumsan.</p>
        </section>

        <div class="div-image-owners">
            <img class="image-owners" src="../../img/pokeball.png" alt="">
        </div>

        <section class="section2-owners">
            <p class="p-owners">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec erat massa, pulvinar in arcu at, aliquet tempus lacus. Morbi dictum interdum velit vitae porttitor. Nam non turpis urna. Donec efficitur vitae quam ac accumsan. Proin egestas ornare facilisis. Aliquam erat volutpat. Integer eget egestas mi. Vestibulum ullamcorper at est in accumsan.</p>
        </section>
    </main>
    <footer class="footer-owners">
        <div class="div1-f-owners"></div>
        <div class="div2-f-owners"></div>
    </footer>
@endsection