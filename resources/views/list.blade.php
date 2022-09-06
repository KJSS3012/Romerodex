@extends('layouts.default')

@section('title', 'Histórico')

@section('content')
	<header class="header-list">
		<img src="../img/Logo.png" alt="RomeroDex" class="logo" onclick="link_homepage()">
		<button class="button-h" onclick="link_homepage()">Voltar</button>
	</header>

	<main class="main-list">
		@foreach($romeromons as $romeros)
			@if($romeros->rom_use_id == auth()->user()->id)
				<div class="div1-m">
					<p class="div1-m">{{ $romeros->rom_name }}</p>
				</div>
			@endif
		@endforeach
	</main>	

	<footer class="footer-list">
		<div class="div1-f-list"></div>
	</footer>
@endsection
