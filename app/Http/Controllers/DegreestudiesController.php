<?php

namespace App\Http\Controllers;

use App\Files\Models\Degreestudies;
use Illuminate\Http\Request;

class DegreestudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degreestudies = Degreestudies::orderBy('id','Asc')->paginate(10);
        return view('degreestudies.index',compact('degreestudies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $degreestudies = Degreestudies::get();
        return view('degreestudies.create',compact('degreestudies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Degreestudies::create([
            'degreeStudy' => request('degreeStudy'),
            'statusDegree' => request('statusDegree'),    
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('degreestudies.index')->with('status_success','Degreestudies saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Degreestudies  $degreestudies
     * @return \Illuminate\Http\Response
     */
    public function show(Degreestudies $degreestudies)
    {
       return view('degreestudies.show', compact('degreestudies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Degreestudies  $degreestudies
     * @return \Illuminate\Http\Response
     */
    public function edit(Degreestudies $degreestudies)
    {
        return view('degreestudies.edit', compact('degreestudies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Degreestudies  $degreestudies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degreestudies $degreestudies)
    {
          $degreestudies -> update($request->all());

        return redirect()->route('degreestudies.edit', $degreestudies->id)
                ->with('info', 'Degreestudies updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Degreestudies  $degreestudies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degreestudies $degreestudies)
    {
        $degreestudies -> delete();

        return back()->with('info','Degreestudies deleted successfully');
    }
}
