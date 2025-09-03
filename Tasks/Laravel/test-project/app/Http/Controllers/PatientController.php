<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private array $patients = [
        ['id' => 1, 'name' => 'Maryam Tarek'],
        ['id' => 2, 'name' => 'Alyaa Gamal'],
        ['id' => 3, 'name' => 'Yasmine Raef'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patients.index', [
            'patients' => $this->patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient = $request->all();
        array_push($this->patients, $patient);

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('patients.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
