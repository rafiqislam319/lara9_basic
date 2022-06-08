<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){

        $data = Company::with('employee')->get();
        //return $data;
        return view('backend.orm.hasmanythrough', compact('data'));
    }
}
