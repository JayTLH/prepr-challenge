<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Labs;

class LabsController extends Controller
{
    public function index()
    {
        $labs = Labs::all()->toArray();
        // dd($labs);
        return view('home', ['labs' => $labs]);
    }
}
