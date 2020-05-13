<?php

namespace App\Http\Controllers;

use App\Files\Models\Typesafes;
use Illuminate\Http\Request;

class TypesafesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $typesafes = Typesafes::orderBy('id','Asc')->paginate(10);
        return view('typesafes.index',compact('typesafes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typesafes = Typesafes::get();
        return view('typesafes.create',compact('typesafes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Typesafes::create([
            'safeName' => request('safeName'),
            'descriptionSafe' => request('descriptionSafe'), 
            'statusSafe' => request('statusSafe'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('typesafes.index')->with('status_success','Typesafes saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Typesafes  $typesafes
     * @return \Illuminate\Http\Response
     */
    public function show(Typesafes $typesafes)
    {
        return view('typesafes.show', compact('typesafes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Typesafes  $typesafes
     * @return \Illuminate\Http\Response
     */
    public function edit(Typesafes $typesafes)
    {
         return view('typesafes.edit', compact('typesafes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Typesafes  $typesafes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typesafes $typesafes)
    {
          $typesafes -> update($request->all());

        return redirect()->route('typesafes.edit', $typesafes->id)
                ->with('info', 'Typesafes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Typesafes  $typesafes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typesafes $typesafes)
    {
          $typesafes -> delete();

        return back()->with('info','Typesafes deleted successfully');
    }
}
