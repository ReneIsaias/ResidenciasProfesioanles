<?php

namespace App\Http\Controllers;

use App\Files\Models\Typefamilies;
use Illuminate\Http\Request;

class TypefamiliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $typefamilies = Typefamilies::orderBy('id','Asc')->paginate(10);
        return view('typefamilies.index',compact('typefamilies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typefamilies = Typefamilies::get();
        return view('typefamilies.create',compact('typefamilies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Typefamilies::create([
            'descriptionType' => request('descriptionType'),
            'statusType' => request('statusType'), 
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('typefamilies.index')->with('status_success','Typefamilies saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Typefamilies  $typefamilies
     * @return \Illuminate\Http\Response
     */
    public function show(Typefamilies $typefamilies)
    {
         return view('typefamilies.show', compact('typefamilies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Typefamilies  $typefamilies
     * @return \Illuminate\Http\Response
     */
    public function edit(Typefamilies $typefamilies)
    {
        return view('typefamilies.edit', compact('typefamilies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Typefamilies  $typefamilies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typefamilies $typefamilies)
    {
          $typefamilies -> update($request->all());

        return redirect()->route('typefamilies.edit', $typefamilies->id)
                ->with('info', 'Typefamilies updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Typefamilies  $typefamilies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typefamilies $typefamilies)
    {
          $typefamilies -> delete();

        return back()->with('info','Typefamilies deleted successfully');
    }
}
