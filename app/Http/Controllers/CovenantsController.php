<?php

namespace App\Http\Controllers;

use App\Files\Models\Covenants;
use Illuminate\Http\Request;

class CovenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covenants = Covenants::orderBy('id','Asc')->paginate(10);
        return view('covenants.index',compact('covenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $covenants = Covenants::get();
        return view('covenants.create',compact('covenants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Covenants::create([
            'convenant' => request('convenant'),
            'descriptionConvenant' => request('descriptionConvenant'),
            'statusConvenant' => request('statusConvenant'),     
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('covenants.index')->with('status_success','Covenants saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Covenants  $covenants
     * @return \Illuminate\Http\Response
     */
    public function show(Covenants $covenants)
    {
        return view('covenants.show', compact('covenants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Covenants  $covenants
     * @return \Illuminate\Http\Response
     */
    public function edit(Covenants $covenants)
    {
        return view('covenants.edit', compact('covenants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Covenants  $covenants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covenants $covenants)
    {
        $covenants -> update($request->all());

        return redirect()->route('covenants.edit', $covenants->id)
                ->with('info', 'Covenants updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Covenants  $covenants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covenants $covenants)
    {
        $covenants -> delete();

        return back()->with('info','Covenants deleted successfully');
    }
}
