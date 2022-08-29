@extends('layouts.default')

@section('title', 'Histórico')

@section('content')
	<header class="header-list">
		<img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
		<button class="button-h" onclick="link_homepage()">Voltar</button>
	</header>

	<main class="main-list">
		{{-- <ul>
			@foreach($romerodex as $romeromon)
				<li> {{ $romeromon->rom_nome }}
			@endforeach
		</ul> --}}
	</main>	

	<footer class="footer-list">
		<div class="div1-f-list"></div>
	</footer>
@endsection
