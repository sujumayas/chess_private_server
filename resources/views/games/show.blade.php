@extends('layouts.app')

@section('content')

	<h1>{{ $game->label }}</h1>
	<p>{{ $game->description }}</p>
	<div>
		<a href="/games/{{$game->id}}/edit">Edit</a>
	</div>
	<div>
		<a href="/games">Go back to games list</a>	
	</div>
	</li>

@endsection