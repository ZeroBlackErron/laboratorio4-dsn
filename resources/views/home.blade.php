@extends('layout')

@include('menu', ['name' => $user->name])

@section('content')
	<h1 class="border-bottom">Deportes</h1>
	<ul>
		@foreach ($sports as $sport)
			<li><a href="/deportes/{{ $sport->slug }}">{{ $sport->name }}</a></li>
		@endforeach
	</ul>
@endsection