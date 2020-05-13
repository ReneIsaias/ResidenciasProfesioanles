<?php

namespace App\Http\Controllers;

use App\Files\Models\Residents;
use Illuminate\Http\Request;

class ResidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $residents = Residents::orderBy('id','Asc')->paginate(10);
        return view('residents.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $residents = Residents::get();
        return view('residents.create',compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $create = Residents::create([
            'residentRegistration' => request('residentRegistration'),
            'nameResident' => request('nameResident'),
            'firtsLastnameResident' => request('firtsLastnameResident'),
            'secondLastnameResident' => request('secondLastnameResident'),
            'emailResident' => request('emailResident'),
            'passwordResident' => request('passwordResident'),
            'phoneResident' => request('phoneResident'),
            'periodResident' => request('periodResident'),
            'id_careers' => request('id_careers'),
            'id_typesafes' => request('id_typesafes'),
            'id_semesters' => request('id_semesters'),
            'id_studiesplans' => request('id_studiesplans'),
            'id_relatives' => request('id_relatives'),            
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('residents.index')->with('status_success','Residents saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function show(Residents $residents)
    {
        return view('residents.show', compact('residents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function edit(Residents $residents)
    {
        return view('residents.edit', compact('residents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residents $residents)
    {
      $residents -> update($request->all());

        return redirect()->route('residents.edit', $residents->id)
                ->with('info', 'Residents updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Residents $residents)
    {
         $residents -> delete();

        return back()->with('info','Residents deleted successfully');
    }
}
