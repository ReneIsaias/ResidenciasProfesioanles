<?php

namespace App\Http\Controllers;

use App\Files\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $reports = Reports::orderBy('id','Asc')->paginate(10);
        return view('reports.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $reports = Reports::get();
        return view('reports.create',compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Reports::create([
            'nameReport' => request('nameReport'),
            'descriptionReport' => request('descriptionReport'),
            'statusReport' => request('statusReport'),
            'id_typeFile' => request('id_typeFile'),      
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('reports.index')->with('status_success','Reports saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
         return view('reports.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
         return view('reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        $reports -> update($request->all());

        return redirect()->route('reports.edit', $reports->id)
                ->with('info', 'Reports updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        $reports -> delete();

        return back()->with('info','Reports deleted successfully');
    }
}
