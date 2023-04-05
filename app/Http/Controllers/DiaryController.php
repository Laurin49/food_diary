<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dairies = Diary::all();
        return view('diaries.index', ['diaries' => $dairies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahlzeit' => 'required',
            'datum' => 'required',
            'essen' => 'required'
        ]);
        Diary::create([
            'mahlzeit' => $request->mahlzeit,
            'datum' => $request->datum,
            'uhrzeit' => $request->uhrzeit,
            'ort' => $request->ort,
            'essen' => $request->essen,
            'getraenk' => $request->getraenk,
            'beschwerden' => $request->beschwerden,
            'anmerkungen' => $request->anmerkungen
        ]);
        return redirect()->route('diaries.index')->with('message', 'Diary Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Diary $diary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Diary $diary)
    {
        return view('diaries.edit', ['diary' => $diary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diary $diary)
    {
        $request->validate([
            'mahlzeit' => 'required',
            'datum' => 'required',
            'essen' => 'required'
        ]);
        $diary->update([
            'mahlzeit' => $request->mahlzeit,
            'datum' => $request->datum,
            'uhrzeit' => $request->uhrzeit,
            'ort' => $request->ort,
            'essen' => $request->essen,
            'getraenk' => $request->getraenk,
            'beschwerden' => $request->beschwerden,
            'anmerkungen' => $request->anmerkungen
        ]);
        return redirect()->route('diaries.index')->with('message', 'Diary Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diary $diary)
    {
        $diary->delete();
        return redirect()->route('diaries.index')->with('message', 'Diary Item deleted successfully');
    }
}
