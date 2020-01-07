<?php

namespace App\Http\Controllers;

use App\tool;
use Illuminate\Http\Request;

class toolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = tool ::latest()->paginate(5);
        return view('tools.index', compact('tools'))
        ->with('i',(request()->input('page',1)-1)*5);
    }
    
        //
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
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
            'tools_name' => 'required',
            'tools_brand' => 'required',
            'qualification' => 'required',
            'serial_number' => 'required',
            'quantity' => 'required',
            
        ]);
  
        tool::create($request->all());
   
        return redirect()->route('tools.index')
                        ->with('success','Tools created successfully.');
        //
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show(tool $tool)
    {
        return view('tools.show',compact('tool'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(tool $tool)
    {
        return view('tools.edit',compact('tool'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tool $tool)
    {
        
        $request->validate([
            'tools_name' => 'required',
            'tools_brand' => 'required',
            'qualification' => 'required',
            'serial_number' => 'required',
            'quantity' => 'required',
        ]);
  
        $tool->update($request->all());
  
        return redirect()->route('tools.index')
                        ->with('success','Tool updated successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function destroy(tool $tool)
    {
        $tool->delete();
  
        return redirect()->route('tools.index')
                        ->with('success','Tools deleted successfully');
        //
    }
}
