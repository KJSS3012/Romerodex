@extends('layouts.default')

@section('title', 'Registre seu Romeromon')

@section('content')
    <header class="header-register">
        <img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
        <button class="button-h" onclick="link_homepage()">Voltar</button>
    </header>
    <main class="main-register">
        <section class="section1-register">
            <div class="div1-s1-register">
                <h1 class="h1-s1-register">Registrar</h1>
            </div>
            <div class="div2-s1-register">
                <form action="/registerRm" method="POST" class="form-div2-register">
                    <input type="text" name="nr" id="" class="input-s1" placeholder="Nome do Romeromon">
                    <input type="text" name="dc" id="" placeholder="Descrição" class="input2-s1">
                    <input type="text" name="rb" id="" placeholder="Romeroball" class="input-s1">
                    <label for="imageRomero" class="label-register">Anexar Imagem</label>
                    <input type="file" name="im" id="imageRomero">
                    <button class="button-register">Enviar</button>
                </form>
            </div>
        </section>
        <section class="section2-register">
            <div class="div1-s2-register">
                <h1 class="h1-s2-register">Romeromon</h1>
            </div>
            <div class="div2-s2-register"></div>
            <div class="div3-s2-register">
                <img src="../img/Romeroju.png" alt="Romeroju" id="image">
            </div>
        </section>
    </main>
@endsection