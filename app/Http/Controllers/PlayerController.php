<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();

        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();

        return view('players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player;
        $player->name = $request->input('name');
        $player->age = $request->input('age');
        $player->position = $request->input('position');
        $player->uniform_number = $request->input('uniform_number');
        $player->is_southpaw = $request->input('is_southpaw');
        $player->is_lefty = $request->input('is_lefty');
        $player->mailaddress = $request->input('mailaddress');
        $player->password = $request->input('password');
        $player->team_id = $request->input('team_id');
        $player->save();

        return to_route('players.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = team::all();

        return view('players.edit', compact('player', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $player->name = $request->input('name');
        $player->age = $request->input('age');
        $player->position = $request->input('position');
        $player->uniform_number = $request->input('uniform_number');
        $player->is_southpaw = $request->input('is_southpaw');
        $player->is_lefty = $request->input('is_lefty');
        $player->mailaddress = $request->input('mailaddress');
        $player->password = $request->input('password');
        $player->team_id = $request->input('team_id');
        $player->update();

        return to_route('players.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $player->delete();
        
        return to_route('players.index');
    }
}
