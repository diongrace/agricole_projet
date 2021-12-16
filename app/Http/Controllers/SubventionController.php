<?php

namespace App\Http\Controllers;

use App\subvention;
use Illuminate\Http\Request;

class SubventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subventions = Subvention::all() ;
        
        return view('bilan',compact("Subventions")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Subvention');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store3(Request $request)
    {
        $Subvention=new Subvention();
        $Subvention->Date=$request->Date ;
        $Subvention->Montant=$request->Montant;
        $Subvention->donateur=$request->donateur;
        $Subvention->cooperative = $request->cooperative;
        $Subvention->Motif= $request->Motif;
        
        $Subvention->save();
        return redirect('/bilan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subvention  $subvention
     * @return \Illuminate\Http\Response
     */
    public function show(subvention $subvention)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subvention  $subvention
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subvention = Subvention::find($id);
        $subventions = Subvention::all() ;
        
       return view('bilan',compact("Subvention"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subvention  $subvention
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subvention $subvention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subvention  $subvention
     * @return \Illuminate\Http\Response
     */
    // public function destroy(subvention $subvention)
      public function delete($id)
    { 
        $subvention=Subvention::find($id)->delete();
        
        return back()->with("successDelete","supprime avec succes!");
    }
}
