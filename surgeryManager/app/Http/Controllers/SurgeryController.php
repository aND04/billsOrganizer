<?php

namespace App\Http\Controllers;

use App\Surgery;
use Illuminate\Http\Request;

use App\Place;
use App\Patient;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries = Surgery::simplePaginate(15);
        return view('surgeries.index', compact('surgeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        $patients = Patient::all();
        return view('surgeries.create', compact('places', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surgery = new Surgery;

        $surgery->surgery_date  = request('surgery_date');
        $surgery->type          = request('type');
        $surgery->code          = request('code');
        $surgery->complications = request('complications');
        $surgery->anesthetic    = (empty($request->anesthetic)) ? false : true;
        if ((request()->file('image')) !== null )
		{
            $surgery->image = request()->file('image')->store('public');
		}
        $surgery->place_id      = Place::where('name', request('place'))->first()->id;
        $surgery->patient_id    = Patient::where('name', request('name'))->first()->id;

        $surgery->save();

        return redirect('/surgeries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function show(Surgery $surgery)
    {
        return view('surgeries.show', compact('surgery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function edit(Surgery $surgery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surgery $surgery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surgery  $surgery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surgery $surgery)
    {
        //
    }
}
