<?php

namespace App\Http\Controllers;

use App\Files\Models\Projectstaffs;
use Illuminate\Http\Request;

class ProjectstaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $projectstaffs = Projectstaffs::orderBy('id','Asc')->paginate(10);
        return view('projectstaffs.index',compact('projectstaffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $projectstaffs = Projectstaffs::get();
        return view('projectstaffs.create',compact('projectstaffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Projectstaffs::create([
            'calification' => request('calification'),
            'descriptionCalification' => request('descriptionCalification'),
            'id_projects' => request('id_projects'),
            'id_staffs' => request('id_staffs'),
            'id_situationprojects' => request('id_situationprojects'),        
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('projectstaffs.index')->with('status_success','Projectstaffs saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Projectstaffs  $projectstaffs
     * @return \Illuminate\Http\Response
     */
    public function show(Projectstaffs $projectstaffs)
    {
        return view('projectstaffs.show', compact('projectstaffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Projectstaffs  $projectstaffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Projectstaffs $projectstaffs)
    {
        return view('projectstaffs.edit', compact('projectstaffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Projectstaffs  $projectstaffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projectstaffs $projectstaffs)
    {
       $projectstaffs -> update($request->all());

        return redirect()->route('projectstaffs.edit', $projectstaffs->id)
                ->with('info', 'Projectstaffs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Projectstaffs  $projectstaffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projectstaffs $projectstaffs)
    {
         $projectstaffs -> delete();

        return back()->with('info','Projectstaffs deleted successfully');
    }
}
