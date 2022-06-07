<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    public function index(){
        $data = Mechanic::with('owner')->get();
        //return $data;
        return view('backend.orm.hasOneThrough', [
            'data' => $data
        ]);
    }
}
