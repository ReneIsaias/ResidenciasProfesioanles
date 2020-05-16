<?php

namespace App\Http\Controllers;

use App\Files\Models\Careers;
use Illuminate\Http\Request;
use App\Http\Requests\CareersCreatedRequest;

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
        //return view('careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'keyCareer' => 'required|min:3|max:10|unique:careers,keyCareer',
            'careerName' => 'required|min:5|max:100|unique:careers,careerName',
            'careerStatus' => 'requiered|max:2|numeric',   
        ]);
        $create = Careers::create([$request->all()]);
        */
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
    public function show(Careers $career)
    {
        return view('careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function edit(Careers $career)
    {
        return view('careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Careers $career)
    {
        $career -> update($request->all());

        return redirect()->route('careers.index', $career->id)
                ->with('status_success', 'Careers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Careers $career)
    {
        $career -> delete();

        return back()->with('status_success','Careers deleted successfully');
    }
}