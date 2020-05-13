<?php

namespace App\Http\Controllers;

use App\Files\Models\Staffs;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $staffs = Staffs::orderBy('id','Asc')->paginate(10);
        return view('staffs.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $staffs = Staffs::get();
        return view('staffs.create',compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $create = Staffs::create([
            'keyStaff' => request('keyStaff'),
            'nameStaff' => request('nameStaff'),
            'firstLastname' => request('firstLastname'),
            'secondLastname' => request('secondLastname'),
            'emailStaff' => request('emailStaff'),
            'passwordStaff' => request('passwordStaff'),
            'phoneStaff' => request('phoneStaff'),
            'statusStaff' => request('statusStaff'),
            'id_posts' => request('id_posts'),
            'id_degreestudies' => request('id_degreestudies'),
            'id_careers' => request('id_careers'),
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('staffs.index')->with('status_success','Staffs saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function show(Staffs $staffs)
    {
        return view('staffs.show', compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffs $staffs)
    {
         return view('staffs.edit', compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staffs $staffs)
    {
          $staffs -> update($request->all());

        return redirect()->route('staffs.edit', $staffs->id)
                ->with('info', 'Staffs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Staffs  $staffs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffs $staffs)
    {
         $staffs -> delete();

        return back()->with('info','Staffs deleted successfully');
    }
}
