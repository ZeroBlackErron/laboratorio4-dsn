@extends('layout')

@include('menu', ['name' => $user->name])

@section('content')
	<a href="{{ route('home') }}"><- Volver al inicio</a><br>
	<h1 class="border-bottom text-center">{{ $data[0]->name }}</h1>
	<div class="container">
		<div class="container" style="width: 80%">
			<img src="{{ $data[0]->image }}" alt="{{ $data[0]->slug }}" class="img-fluid">
		</div>
		<div class="info-sport">
			<h3>Descripción:</h3>
			<span>{{ $data[0]->description }}</span>
		</div>
		<div class="info-sport">
			<h3>Historia:</h3>
			<span>{{ $data[0]->history }}</span>
		</div>
	</div>
@endsection