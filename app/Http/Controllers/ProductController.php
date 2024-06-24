<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.produtos.home');
    }

    public function create()
    {
        return view('admin.produtos.create');    
    }
}
