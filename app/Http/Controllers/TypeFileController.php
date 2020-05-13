<?php

namespace App\Http\Controllers;

use App\Files\Models\TypeFile;
use Illuminate\Http\Request;

class TypeFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $typeFile = TypeFile::orderBy('id','Asc')->paginate(10);
        return view('typeFile.index',compact('typeFile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeFile = TypeFile::get();
        return view('typeFile.create',compact('typeFile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = TypeFile::create([
            'descriptionSector' => request('descriptionSector'),
            'statusSector' => request('statusSector'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('typeFile.index')->with('status_success','TypeFile saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\TypeFile  $typeFile
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFile $typeFile)
    {
         return view('typeFile.show', compact('typeFile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\TypeFile  $typeFile
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeFile $typeFile)
    {
         return view('typeFile.edit', compact('typeFile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\TypeFile  $typeFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeFile $typeFile)
    {
         $typeFile -> update($request->all());

        return redirect()->route('typeFile.edit', $typeFile->id)
                ->with('info', 'TypeFile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\TypeFile  $typeFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeFile $typeFile)
    {
          $typeFile -> delete();

        return back()->with('info','TypeFile deleted successfully');
    }
}
