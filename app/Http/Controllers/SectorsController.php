<?php

namespace App\Http\Controllers;

use App\Files\Models\Sectors;
use Illuminate\Http\Request;

class SectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $sectors = Sectors::orderBy('id','Asc')->paginate(10);
        return view('sectors.index',compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $sectors = Sectors::get();
        return view('sectors.create',compact('sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Sectors::create([
            'descriptionSector' => request('descriptionSector'),
            'statusSector' => request('statusSector'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('sectors.index')->with('status_success','Sectors saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function show(Sectors $sectors)
    {
         return view('sectors.show', compact('sectors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function edit(Sectors $sectors)
    {
         return view('sectors.edit', compact('sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sectors $sectors)
    {
         $sectors -> update($request->all());

        return redirect()->route('sectors.edit', $sectors->id)
                ->with('info', 'Sectors updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Sectors  $sectors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sectors $sectors)
    {
          $sectors -> delete();

        return back()->with('info','Sectors deleted successfully');
    }
}
