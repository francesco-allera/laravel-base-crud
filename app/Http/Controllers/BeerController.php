<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->beerParamsVal($request);
        $data = $request->all();
        $beer = new Beer();
        $beer->fill($data);
        $beer->save();
        $beerStored = Beer::orderBy('id', 'desc')->first();

        return redirect()->route('beers.show', $beerStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $this->beerParamsVal($request);
        $data = $request->all();
        $beer->update($data);

        return redirect()->route('beers.show', compact('beer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()->route('beers.index');
    }


    /* ----- MY VALIDATE FUNCTION ----- */
    private function beerParamsVal(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'appearance' => 'required|max:100',
            'taste' => 'required|max:100',
            'nation' => 'required|max:3',
            'cL' => 'required|numeric|between:0,127',
            'alcohol' => 'required|numeric|between:0,99.99',
            'price' => 'required|numeric|between:0,99.99',
            'img_url' => 'required|max:2048'
        ]);
    }
}
