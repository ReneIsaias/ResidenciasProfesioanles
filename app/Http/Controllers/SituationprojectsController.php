<?php

namespace App\Http\Controllers;

use App\Files\Models\Situationprojects;
use Illuminate\Http\Request;

class SituationprojectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $situationprojects = Situationprojects::orderBy('id','Asc')->paginate(10);
        return view('situationprojects.index',compact('situationprojects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             $situationprojects = Situationprojects::get();
        return view('situationprojects.create',compact('situationprojects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Situationprojects::create([
            'projectSituation' => request('projectSituation'),
            'descriptionSituation' => request('descriptionSituation'),
            'statusSituation' => request('statusSituation'),     
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('situationprojects.index')->with('status_success','Situationprojects saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Situationprojects  $situationprojects
     * @return \Illuminate\Http\Response
     */
    public function show(Situationprojects $situationprojects)
    {
        return view('situationprojects.show', compact('situationprojects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Situationprojects  $situationprojects
     * @return \Illuminate\Http\Response
     */
    public function edit(Situationprojects $situationprojects)
    {
      return view('situationprojects.edit', compact('situationprojects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Situationprojects  $situationprojects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Situationprojects $situationprojects)
    {
        $situationprojects -> update($request->all());

        return redirect()->route('situationprojects.edit', $situationprojects->id)
                ->with('info', 'Situationprojects updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Situationprojects  $situationprojects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Situationprojects $situationprojects)
    {
         $situationprojects -> delete();

        return back()->with('info','Situationprojects deleted successfully');
    }
}
