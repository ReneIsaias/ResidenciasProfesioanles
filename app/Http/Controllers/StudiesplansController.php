<?php

namespace App\Http\Controllers;

use App\Files\Models\Studiesplans;
use Illuminate\Http\Request;

class StudiesplansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $studiesplans = Studiesplans::orderBy('id','Asc')->paginate(10);
        return view('studiesplans.index',compact('studiesplans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $studiesplans = Studiesplans::get();
        return view('studiesplans.create',compact('studiesplans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Studiesplans::create([
            'planStudies' => request('planStudies'),
            'descriptionPlan' => request('descriptionPlan'), 
            'planDate' => request('planDate'),
            'planStatus' => request('planStatus'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('studiesplans.index')->with('status_success','Studiesplans saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Studiesplans  $studiesplans
     * @return \Illuminate\Http\Response
     */
    public function show(Studiesplans $studiesplans)
    {
         return view('studiesplans.show', compact('studiesplans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Studiesplans  $studiesplans
     * @return \Illuminate\Http\Response
     */
    public function edit(Studiesplans $studiesplans)
    {
         return view('studiesplans.edit', compact('studiesplans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Studiesplans  $studiesplans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studiesplans $studiesplans)
    {
          $studiesplans -> update($request->all());

        return redirect()->route('studiesplans.edit', $studiesplans->id)
                ->with('info', 'Studiesplans updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Studiesplans  $studiesplans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studiesplans $studiesplans)
    {
          $studiesplans -> delete();

        return back()->with('info','Studiesplans deleted successfully');
    }
}
