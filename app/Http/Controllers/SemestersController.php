<?php

namespace App\Http\Controllers;

use App\Files\Models\Semesters;
use Illuminate\Http\Request;

class SemestersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters = Semesters::orderBy('id','Asc')->paginate(10);
        return view('semesters.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semesters::get();
        return view('semesters.create',compact('semesters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Semesters::create([
            'nameSemester' => request('nameSemester'),
            'statusSemester' => request('statusSemester'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('semesters.index')->with('status_success','Semesters saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Semesters  $semesters
     * @return \Illuminate\Http\Response
     */
    public function show(Semesters $semesters)
    {
        return view('semesters.show', compact('semesters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Semesters  $semesters
     * @return \Illuminate\Http\Response
     */
    public function edit(Semesters $semesters)
    {
         return view('semesters.edit', compact('semesters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Semesters  $semesters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semesters $semesters)
    {
        $semesters -> update($request->all());

        return redirect()->route('semesters.edit', $semesters->id)
                ->with('info', 'Semesters updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Semesters  $semesters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semesters $semesters)
    {
         $semesters -> delete();

        return back()->with('info','Semesters deleted successfully');
    }
}
