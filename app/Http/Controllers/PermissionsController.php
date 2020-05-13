<?php

namespace App\Http\Controllers;

use App\RolPermission\Models\Permissions;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $permissions = Permissions::orderBy('id','Asc')->paginate(10);
        return view('permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permissions::get();
        return view('permissions.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Permissions::create([
            'namePermission' => request('namePermission'),
            'slugPermission' => request('slugPermission'),
            'descriptionPermission' => request('descriptionPermission'),
            'statusPermission' => request('statusPermission'),
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('permissions.index')->with('status_success','Permissions saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RolPermission\Models\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function show(Permissions $permissions)
    {
       return view('permissions.show', compact('permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RolPermission\Models\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Permissions $permissions)
    {
        return view('permissions.edit', compact('permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RolPermission\Models\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permissions $permissions)
    {
        $permissions -> update($request->all());

        return redirect()->route('permissions.edit', $permissions->id)
                ->with('info', 'Permissions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RolPermission\Models\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissions $permissions)
    {
         $permissions -> delete();

        return back()->with('info','Permissions deleted successfully');
    }
}
