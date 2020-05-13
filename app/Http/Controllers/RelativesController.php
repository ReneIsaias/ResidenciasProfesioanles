<?php

namespace App\Http\Controllers;

use App\Files\Models\Relatives;
use Illuminate\Http\Request;

class RelativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $relatives = Relatives::orderBy('id','Asc')->paginate(10);
        return view('relatives.index',compact('relatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relatives = Relatives::get();
        return view('relatives.create',compact('relatives'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $create = Relatives::create([
            'nameRelative' => request('nameRelative'),
            'firstLastname' => request('firstLastname'),
            'secondLastname' => request('secondLastname'),
            'phoneRelative' => request('phoneRelative'),
            'addresRelative' => request('addresRelative'),
            'id_typefamily' => request('id_typefamily'),     
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('relatives.index')->with('status_success','Relatives saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Relatives  $relatives
     * @return \Illuminate\Http\Response
     */
    public function show(Relatives $relatives)
    {
        return view('relatives.show', compact('relatives'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Relatives  $relatives
     * @return \Illuminate\Http\Response
     */
    public function edit(Relatives $relatives)
    {
        return view('relatives.edit', compact('relatives'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Relatives  $relatives
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relatives $relatives)
    {
       $relatives -> update($request->all());

        return redirect()->route('relatives.edit', $relatives->id)
                ->with('info', 'Relatives updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Relatives  $relatives
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relatives $relatives)
    {
        $relatives -> delete();

        return back()->with('info','Relatives deleted successfully');
    }
}
