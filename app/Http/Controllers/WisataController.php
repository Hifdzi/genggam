<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::latest()->paginate(5);
    
        return view('wisata.index',compact('wisata'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisata)
    {
        $wisata->delete();
    
        return redirect()->route('wisata.index')
                        ->with('success','wisata deleted successfully');
    }
}
