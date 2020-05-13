<?php

namespace App\Http\Controllers;

use App\Files\Models\Staffresidents;
use Illuminate\Http\Request;

class StaffresidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $staffresidents = Staffresidents::orderBy('id','Asc')->paginate(10);
        return view('staffresidents.index',compact('staffresidents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $staffresidents = Staffresidents::get();
        return view('staffresidents.create',compact('staffresidents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Staffresidents::create([
            'id_staffs' => request('id_staffs'),
            'id_residents' => request('id_residents'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('staffresidents.index')->with('status_success','Staffresidents saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Staffresidents  $staffresidents
     * @return \Illuminate\Http\Response
     */
    public function show(Staffresidents $staffresidents)
    {
       return view('staffresidents.show', compact('staffresidents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Staffresidents  $staffresidents
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffresidents $staffresidents)
    {
        return view('staffresidents.edit', compact('staffresidents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Staffresidents  $staffresidents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffresidents $staffresidents)
    {
         $staffresidents -> update($request->all());

        return redirect()->route('staffresidents.edit', $staffresidents->id)
                ->with('info', 'Staffresidents updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Staffresidents  $staffresidents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffresidents $staffresidents)
    {
        $staffresidents -> delete();

        return back()->with('info','Staffresidents deleted successfully');
    }
}
