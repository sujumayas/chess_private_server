<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
    public function index(){ 
    	$games = Game::all();
    	return view('games.index', compact('games')); 
   	}
    public function create(){
    	return view('games.create');
	}
    public function store(Request $request){ 
    	/* Create the game in the Database */
    	Game::create($request->all());
    	return back();
    }
    public function show(Game $game){ 
    	return view('games.show', compact('game')); 
   	}
    public function edit(Game $game){
    	return view('games.edit', compact('game')); 
    }
    public function update(Request $request, Game $game){ 
    	/* Update the game in the Database */
    	$game->fill($request->all());
		$game->save();

		return back();
	}   
    public function destroy(){ 
    	/* Delete the game from the Database */ 
    }
}
