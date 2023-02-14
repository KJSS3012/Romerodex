@extends('layouts.default')

@section('title', 'Edite seu Romeromon')

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
                <form action="{{url('/romerodex', ['id'=>$id])}}" method="POST" class="form-div2-register">
                    @csrf
                    @method('PUT')
                    <input type="text" name="nr" class="input-s1" placeholder="Nome do Romeromon" value="{{$romeromon->rom_name}}">
                    <input type="text" name="dc" placeholder="Descrição" class="input2-s1" value="{{$romeromon->rom_description}}">
                    <input type="text" class="input-s1" readonly value="{{$romeroballs->bal_romeroball}}">
                    <button class="button-register">Editar</button>
                </form>
            </div>
        </section>
        <section class="section2-register">
            <div class="div1-s2-register">
                <h1 class="h1-s2-register">{{$romeromon->rom_name}}</h1>
            </div>
            <div class="div2-s2-register"></div>
            <div class="div3-s2-register">
                <img src="{{asset($romeromon->image)}}" alt="{{$romeromon->rom_name}}" id="image">
            </div>
        </section>
    </main>
@endsection