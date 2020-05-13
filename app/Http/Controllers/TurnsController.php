<?php

namespace App\Http\Controllers;

use App\Files\Models\Turns;
use Illuminate\Http\Request;

class TurnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $turns = Turns::orderBy('id','Asc')->paginate(10);
        return view('turns.index',compact('turns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $turns = Turns::get();
        return view('turns.create',compact('turns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Turns::create([
            'descriptionTurn' => request('descriptionTurn'),
            'statusTurn' => request('statusTurn'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('turns.index')->with('status_success','Turns saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function show(Turns $turns)
    {
         return view('turns.show', compact('turns'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function edit(Turns $turns)
    {
         return view('turns.edit', compact('turns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turns $turns)
    {
          $turns -> update($request->all());

        return redirect()->route('turns.edit', $turns->id)
                ->with('info', 'Turns updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Turns  $turns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turns $turns)
    {
          $turns -> delete();

        return back()->with('info','Turns deleted successfully');
    }
}
