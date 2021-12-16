<?php

namespace App\Http\Controllers;

use App\Utilsateur;
use Illuminate\Http\Request;

class UtilsateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Utilsateurs = Utilsateur::all() ;
        
        return view('resume',compact("Utilsateurs")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Depense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $Utilsateur=new Utilsateur();
        $Utilsateur->Date=$request->Date ;
        $Utilsateur->Vehicule =$request->Vehicule;
        $Utilsateur->Materiel =$request->Materiel;
        $Utilsateur->employés=$request->employés;
        $Utilsateur->Imprevue = $request->Imprevue;
        $Utilsateur->Total = $request->Total;
        
        $Utilsateur->save();
        return redirect('/resume');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utilsateur  $utilsateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilsateur $utilsateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilsateur  $utilsateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilsateur=Utilsateur::find($id);
        $utilsateurs =Utilsateur::all() ;
        
       return view('resume',compact("Depense"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilsateur  $utilsateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilsateur $utilsateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilsateur  $utilsateur
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Utilsateur $utilsateur)
    public function delete($id)
    {
        // $utilsateur=Utilsateur::find($id)->delete();
        
        $utilsateur=Utilsateur::where('id')->delete();
       
         return back()->with("successDelete","supprime avec succes!");
    }
}
