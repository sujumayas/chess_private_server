@extends('layouts.app')

@section('content')

	<h1>Edit <strong>{{$game->label}}</strong></h1>
	<div class="form-container" style="width:320px;margin:0 auto;">
		<form role="form" class="" method="POST" action="{{ route('games.update', $game) }}">
        	{{csrf_field()}}
        	{{ method_field('PUT') }}
            <div class="">
                    <div class="form-group">
                    	<label>Change the name</label> 
                    	<input type="text" name="label" placeholder="{{$game->label}}" class="form-control" required>
                    </div>
            </div>
            <div class=""><h4>Change the Description</h4>
                <div class="form-group">
                   	<textarea placeholder="{{$game->description}}" name="description" class="form-control" maxlength="250" style="height: 100px;"></textarea>
                </div>
            </div>
            <div class="pull-right">
            	<a href="/games/{{$game->id}}">Go back</a>
                <button class="btn btn-sm" type="submit">
                    <strong> Save </strong>
                </button>
            </div>
        </form>
	</div>
	
@endsection