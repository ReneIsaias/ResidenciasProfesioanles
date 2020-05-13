<?php

namespace App\Http\Controllers;

use App\Files\Models\Careers;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careers::orderBy('id','Asc')->paginate(10);
        return view('careers.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $careers = Careers::get();
        return view('careers.create',compact('careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Careers::create([
            'keyCareer' => request('keyCareer'),
            'careerName' => request('careerName'),
            'careerStatus' => request('careerStatus'),     
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('careers.index')->with('status_success','Careers saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function show(Careers $careers)
    {
        return view('careers.show', compact('careers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function edit(Careers $careers)
    {
        return view('careers.edit', compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Careers $careers)
    {
        $careers -> update($request->all());

        return redirect()->route('careers.edit', $careers->id)
                ->with('info', 'Careers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Careers $careers)
    {
        $careers -> delete();

        return back()->with('info','Careers deleted successfully');
    }
}
