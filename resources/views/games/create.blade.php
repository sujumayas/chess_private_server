@extends('layouts.app')

@section('content')

	<h1 style="text-align:center;">Create a new Game</h1>
	<div class="form-container" style="width:320px;margin:0 auto;">
		<form role="form" class="" method="POST" action="{{ route('games.store') }}">
        	{{csrf_field()}}
            <div class="">
                    <div class="form-group">
                    	<label>Name</label> 
                    	<input type="text" name="label" placeholder="Insert here the name of your game" class="form-control" required>
                    </div>
            </div>
            <div class=""><h4>Description</h4>
                <div class="form-group">
                   	<textarea placeholder="Write a description of the game" name="description" class="form-control" maxlength="250" style="height: 100px;"></textarea>
                </div>
            </div>
            <div class="pull-right">
                <a href="/games">Back </a>
                <button class="btn btn-sm" type="submit">
                    <strong> Create </strong>
                </button>
            </div>
        </form>
	</div>
	
@endsection