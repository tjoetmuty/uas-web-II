<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(): View
    {
        $class = myClass::latest()-> paginate(10);

        return view ('myclass.index', compact('myClass'));
    }
}
