<?php

namespace App\Http\Controllers;

use App\Menbre;
use App\Http\Controllers\Menbrecontroller;
use Illuminate\Http\Request;

class MenbreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menbres=menbre::all() ;
        
        return view('information',compact("menbres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $menbre=new Menbre();
        $menbre->Nom=$request->Nom ;
        $menbre->Prenom=$request->Prenom;
        $menbre->Contact=$request->Contact;
        $menbre->Genre=$request->Genre;
        $menbre->Specialite = $request->Specialite;
        
        $menbre->save() ;
        return redirect('/information') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menbre  $menbre
     * @return \Illuminate\Http\Response
     */
    public function show(Menbre $menbre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menbre  $menbre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $membre = Membre::find($id);
        $membres = Membre::all() ;
        
       return view('information',compact("inscription"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menbre  $menbre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menbre $menbre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menbre  $menbre
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Menbre $menbre)
    public function delete($id)
    {
        $menbre=Menbre::find($id)->delete();
        

        return back()->with("successDelete","membre supprime avec succes!");
    }
}
