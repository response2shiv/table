<?php

namespace App\Http\Controllers;

use App\Models\RandomNumber;
use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $firstRandNumbers = RandomNumber::pluck('first_number');
        $secondRandNumbers = RandomNumber::pluck('second_number');
        return view('table', ['first' => $firstRandNumbers, 'second' => $secondRandNumbers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RandomNumber  $randomNumber
     * @return \Illuminate\Http\Response
     */
    public function show(RandomNumber $randomNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RandomNumber  $randomNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RandomNumber $randomNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RandomNumber  $randomNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(RandomNumber $randomNumber)
    {
        //
    }
}
