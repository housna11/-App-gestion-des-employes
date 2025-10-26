<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employe;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=employe::all();
        return view('accueil',['employees'=>$employees]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infos=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'poste'=>'required',
        ]);
        employe::create($infos);
        return redirect()->route('accueil'); 
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employe=employe::findOrFail($id);
        return view('detail',['employe'=>$employe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employe=employe::findOrFail($id);
        return view('modifier',['employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $employes=employe::findOrFail($id);
        $employes->update($request->all());
        return redirect()->route('accueil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employes=employe::findOrFail($id);
        $employes->delete();
        return redirect('/');
    }
}
