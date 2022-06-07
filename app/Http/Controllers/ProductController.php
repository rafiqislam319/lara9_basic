<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $data = Product::find(5)->brands;
        // return $data;

        $data = Product::with('brands')->get();
        return view('backend.orm.many2many', compact('data'));
    }
}
