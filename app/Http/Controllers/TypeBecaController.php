<?php

namespace App\Http\Controllers;

use App\Files\Models\TypeBeca;
use Illuminate\Http\Request;

class TypeBecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $typeBeca = TypeBeca::orderBy('id','Asc')->paginate(10);
        return view('typeBeca.index',compact('typeBeca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $typeBeca = TypeBeca::get();
        return view('typeBeca.create',compact('typeBeca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = TypeBeca::create([
            'descriptionBeca' => request('descriptionBeca'),
            'statusBeca' => request('statusBeca'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('typeBeca.index')->with('status_success','TypeBeca saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\TypeBeca  $typeBeca
     * @return \Illuminate\Http\Response
     */
    public function show(TypeBeca $typeBeca)
    {
         return view('typeBeca.show', compact('typeBeca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\TypeBeca  $typeBeca
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeBeca $typeBeca)
    {
         return view('typeBeca.edit', compact('typeBeca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\TypeBeca  $typeBeca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeBeca $typeBeca)
    {
          $typeBeca -> update($request->all());

        return redirect()->route('typeBeca.edit', $typeBeca->id)
                ->with('info', 'TypeBeca updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\TypeBeca  $typeBeca
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeBeca $typeBeca)
    {
          $typeBeca -> delete();

        return back()->with('info','TypeBeca deleted successfully');
    }
}
