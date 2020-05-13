<?php

namespace App\Http\Controllers;

use App\Files\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projects = Projects::orderBy('id','Asc')->paginate(10);
        return view('projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Projects::get();
        return view('projects.create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Projects::create([
            'keyProject' => request('keyProject'),
            'nameProject' => request('nameProject'),
            'descriptionProject' => request('descriptionProject'),
            'objetivesProject' => request('objetivesProject'),
            'dateStart' => request('dateStart'),
            'dateEnd' => request('dateEnd'),
            'qualificationProject' => request('qualificationProject'),
            'revisionProject' => request('revisionProject'),
            'dateRevision' => request('dateRevision'),
            'hourlyProject' => request('hourlyProject'),
            'dateRealRevicion' => request('dateRealRevicion'),
            'id_situationprojects' => request('id_situationprojects'),
            'id_reports' => request('id_reports'),
            'id_businesses' => request('id_businesses'),
            'id_residents' => request('id_residents'),            
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('projects.index')->with('status_success','Projects saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
       return view('projects.show', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Projects $projects)
    {
        return view('projects.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projects $projects)
    {
       $projects -> update($request->all());

        return redirect()->route('projects.edit', $projects->id)
                ->with('info', 'Projects updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
         $projects -> delete();

        return back()->with('info','Projects deleted successfully');
    }
}
