<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalCenter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associatedDoctors = auth()->user()?->MedicalCenter->doctors()->get();

        return view('medical-center', ['associatedDoctors' => $associatedDoctors]);
    }
}
