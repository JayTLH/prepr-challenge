<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Labs;

class LabsController extends Controller
{
    public function index()
    {
        $labs = Labs::all()->toArray();
        $admin = Auth::user()->type;

        if ($admin === 'admin') {
            return view('home', ['labs' => $labs, 'admin' => $admin]);
        }

        return view('home', ['labs' => $labs]);
    }
}
