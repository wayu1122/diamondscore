<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game();
        $game->game_datetime = $request->input('game_datetime');
        $game->location = $request->input('location');
        $game->game_number = $request->input('game_number');
        $game->home_team_id = $request->input('home_team_id');
        $game->home_team_score = $request->input('home_team_score');
        $game->away_team_id = $request->input('away_team_id');
        $game->away_team_score = $request->input('away_team_score');
        $game->save();

        return to_route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->game_datetime = $request->input('game_datetime');
        $game->location = $request->input('location');
        $game->game_number = $request->input('game_number');
        $game->home_team_id = $request->input('home_team_id');
        $game->home_team_score = $request->input('home_team_score');
        $game->away_team_id = $request->input('away_team_id');
        $game->away_team_score = $request->input('away_team_score');
        $game->update();

        return to_route('games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return to_route('games.index');
    }
}
