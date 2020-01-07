<?php

namespace App\Http\Controllers;

use App\borrow;
use Illuminate\Http\Request;

class borrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = borrow::latest()->paginate(5);
        return view('borrows.index',compact('borrows'))
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
    
        return view('borrows.create', compact('borrows'));
       
    }
        
        //
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'borrower_fname' => 'required',
            'borrower_mrand' => 'required',
            'borrower_lname'=>'required',
            'qualification'=>'required',
            'borrow'=>'required',
            'quantity'=>'required',

        ]);
  
        borrow::create($request->all());
   
        return redirect()->route('borrows.index')
                        ->with('success','Borrow created successfully.');
     
                        //
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(borrow $borrow)
    {
        return view('borrows.show',compact('borrow'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(borrow $borrow)
    {
        return view('borrows.show',compact('borrow'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, borrow $borrow)
    {
        $request->validate([
            'borrower_fname' => 'required',
            'borrower_mrand' => 'required',
            'borrower_lname'=>'required',
            'qualification'=>'required',
            'borrow'=>'required',
            'quantity'=>'required',

            
        ]);
        borrow::create($request->all());
   
            return redirect()->route('borrows.index')
                            ->with('success','Borrow created successfully.');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(borrow $borrow)
    {
        $borrow->delete();
  
        return redirect()->route('borrows.index')
                        ->with('success','Borrow deleted successfully');

        //
    }
}
