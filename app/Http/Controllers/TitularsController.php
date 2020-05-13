<?php

namespace App\Http\Controllers;

use App\Files\Models\Titulars;
use Illuminate\Http\Request;

class TitularsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $titulars = Titulars::orderBy('id','Asc')->paginate(10);
        return view('titulars.index',compact('titulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $titulars = Titulars::get();
        return view('titulars.create',compact('titulars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Titulars::create([
            'nameTitular' => request('nameTitular'),
            'firstLastname' => request('firstLastname'), 
            'secondLastname' => request('secondLastname'),
            'phoneTitular' => request('phoneTitular'), 
            'id_post' => request('id_post'),
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('titulars.index')->with('status_success','Titulars saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Titulars  $titulars
     * @return \Illuminate\Http\Response
     */
    public function show(Titulars $titulars)
    {
         return view('titulars.show', compact('titulars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Titulars  $titulars
     * @return \Illuminate\Http\Response
     */
    public function edit(Titulars $titulars)
    {
         return view('titulars.edit', compact('titulars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Titulars  $titulars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulars $titulars)
    {
          $titulars -> update($request->all());

        return redirect()->route('titulars.edit', $titulars->id)
                ->with('info', 'Titulars updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Titulars  $titulars
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulars $titulars)
    {
          $titulars -> delete();

        return back()->with('info','Titulars deleted successfully');
    }
}
