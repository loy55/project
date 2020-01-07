<?php

namespace App\Http\Controllers;

use App\equip;
use Illuminate\Http\Request;

class equipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equips = equip::latest()->paginate(5);
        return view('equips.index',compact('equips'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equips.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'equipment_name' => 'required',
            'equipment_brand' => 'required',
            'qualification'=>'required',
            'serial_number'=>'required',
            'quantity'=>'required',
        ]);
  
        equip::create($request->all());
   
        return redirect()->route('equips.index')
                        ->with('success','Equipment created successfully.');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\equips  $equips
     * @return \Illuminate\Http\Response
     */
    public function show(equip $equip)
    {
        return view('equips.show',compact('equip'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\equips  $equips
     * @return \Illuminate\Http\Response
     */
    public function edit(equip $equip)
    {
        return view('equips.edit',compact('equip'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\equips  $equips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, equip $equip)
    {
        $request->validate([
            'equipment_name' => 'required',
            'equipment_brand' => 'required',
            'qualification'=>'required',
            'serial_number'=>'required',
            'quantity'=>'required',
        ]);
  
        $equip->update($request->all());
  
        return redirect()->route('equips.index')
                        ->with('success','Equipment updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\equips  $equips
     * @return \Illuminate\Http\Response
     */
    public function destroy(equip $equip)
    {
        $equip->delete();
  
        return redirect()->route('equips.index')
                        ->with('success','Equipment deleted successfully');
        //
    }
}
