<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myClass;
use Illuminate\View\View;

class ClassController extends Controller
{
    public function index(): View
    {
        $myclass = myClass::latest()->paginate(10);

        return view('myclass.index', compact('myclass'));
    }
}