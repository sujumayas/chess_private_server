@extends('layouts.app')

@section('content')

	<h1>This is index</h1>
	<p>If you want you can view any game created here.</p>
	<p>Or if you want, you can create your own: <a href="/games/create">Create a New Game</a></p>
	<ol>
	@foreach ($games as $game)
		<li>
			<h2>{{ $game->label }}</h2>
			<p>{{ $game->description }}</p>
			<a href="/games/{{$game->id}}">Watch Game</a>
		</li>
	@endforeach
	</ol>

@endsection