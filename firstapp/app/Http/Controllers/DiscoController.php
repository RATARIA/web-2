<?php

namespace App\Http\Controllers;

use App\Models\disco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $discos = Disco::where('user_id', Auth::user()->id)->get();
      $discos = Auth::user()->discos_m;
    return view('discos.index',[
        'disco' => $discos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('discos.create');
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
        //return 'disco: ' . $request->name . ',' . $request->artist . ',' . $request->year;
        disco::create ([
            'name' => $request->name,
            'artist'=>$request->artist,
            'year'=>$request->year,
            'user_id'=> Auth::user()->id

        ]);
        return redirect ('/discos'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function show(disco $disco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function edit(disco $disco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disco $disco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function destroy(disco $disco)
    {   
        if($disco->user_id == Auth::User()->id){ 
        $disco->delete();
        }
        return redirect('/discos');
        
    }
}
