<?php

namespace App\Http\Controllers;

use App\Models\Base_running;
use App\Models\Player;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class base_runningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $base_runnings = base_running::all();

        return view('base_runnings.index', compact('base_runnings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();
        return view('base_runnings.create', compact('players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $base_running = new base_running();
        $base_running->player_id = $request->input('player_id');
        $base_running->out = $request->input('out');
        $base_running->steal = $request->input('steal');
        $base_running->advance_base = $request->input('advance_base');
        $base_running->left_on_base = $request->input('left_on_base');
        $base_running->save();

        return to_route('base_runnings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Base_running  $base_running
     * @return \Illuminate\Http\Response
     */
    public function show(Base_running $base_running)
    {
        return view('base_runnings.show',compact('base_running'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Base_running  $base_running
     * @return \Illuminate\Http\Response
     */
    public function edit(Base_running $base_running)
    {
        $players = player::all();

        return view('base_runnings.edit', compact('base_running', 'players'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Base_running  $base_running
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Base_running $base_running)
    {
        $base_running->player_id = $request->input('player_id');
        $base_running->out = $request->input('out');
        $base_running->steal = $request->input('steal');
        $base_running->advance_base = $request->input('advance_base');
        $base_running->left_on_base = $request->input('left_on_base');
        $base_running->update();

        return to_route('base_runnings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Base_running  $base_running
     * @return \Illuminate\Http\Response
     */
    public function destroy(Base_running $base_running)
    {
        $base_running->delete();

        return to_route('inings.index');
    }
}
