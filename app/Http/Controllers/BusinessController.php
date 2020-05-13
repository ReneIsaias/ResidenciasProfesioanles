<?php

namespace App\Http\Controllers;

use App\Files\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business = Business::orderBy('id','Asc')->paginate(10);
        return view('business.index',compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $business = Business::get();
        return view('business.create',compact('business'));
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
        $role = Role::create([
            
        ]);
        if($request->get('permission')){
           // return $request->all();
            $role -> permissions()->sync($request->get('permission'));
        }   */
        $create = Business::create([
            'rfcBusiness' => request('rfcBusiness'),
            'nameBusiness' => request('nameBusiness'),
            'emailBusiness' => request('emailBusiness'),
            'misionBusiness' => request('misionBusiness'),
            'addresBusiness' => request('addresBusiness'),
            'phoneBusiness' => request('phoneBusiness'),
            'cpBusiness' => request('cpBusiness'),
            'statusBusines' => request('statusBusines'),
            'id_titulars' => request('id_titulars'),
            'id_staffs' => request('id_staffs'),
            'id_covenant' => request('id_covenant'),
            'id_turns' => request('id_turns'),
            'id_sectors' => request('id_sectors'),            
        ]);
    
       // $success = $create ? $request->session()->flash('success', '¡Registro exitoso!') : $request->session()->flash('success', 'Ooops! Algo salio mal :(');
       return redirect()->route('business.index')->with('status_success','Business saved successfully');    
        //return redirect('addresses/'.$request->session()->get('customer_code'));


        //return $request->all();
        /*
        $request->validate([
            'name' => 'required|max:50|unique:roles,name',
            'slug' => 'required|max:50|unique:roles,slug',
            'full-access' => 'required|in:on,yes,no',
        ]);
        $role = Role::create([$request->all()]);

        if($request->get('permission')){
            return $request->all();
            $role -> permissions()->sync($request->get('permission'));
        }        
        return redirect()->route('role.index')->with('status_success','Role saved successfully');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        return view('business.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        return view('business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $business -> update($request->all());

        return redirect()->route('business.edit', $business->id)
                ->with('info', 'Busines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files\Models\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $business -> delete();

        return back()->with('info','Busines deleted successfully');
    }
}
