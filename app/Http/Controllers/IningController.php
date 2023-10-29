<?php

namespace App\Http\Controllers;

use App\Models\Ining;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inings = Ining::all();
 
         return view('inings.index', compact('inings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ining = new Ining();
        $ining->ining = $request->input('ining');
        $ining->game_id = $request->input('game_id');
        $ining->save();

        return to_route('inings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ining  $ining
     * @return \Illuminate\Http\Response
     */
    public function show(Ining $ining)
    {
        return view('inings.show', compact('ining'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ining  $ining
     * @return \Illuminate\Http\Response
     */
    public function edit(Ining $ining)
    {
        return view('inings.edit', compact('ining'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ining  $ining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ining $ining)
    {
        $ining->ining = $request->input('ining');
        $ining->game_id = $request->input('game_id');
        $ining->update();

        return to_route('inings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ining  $ining
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ining $ining)
    {
        $ining->delete();

        return to_route('inings.index');
    }
}
