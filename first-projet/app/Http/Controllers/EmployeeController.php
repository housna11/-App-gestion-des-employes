<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Http\Requests\StoreemployeeRequest;
use App\Http\Requests\UpdateemployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreemployeeRequest $request)
    {
        $infos=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'poste'=>'required',
        ]);
        employe::create($infos);
        return redirect('accueil');
    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateemployeeRequest $request, employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(employee $employee)
    {
        //
    }
}
