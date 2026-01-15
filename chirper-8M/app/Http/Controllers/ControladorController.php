<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulo;

class ControladorController extends Controller
{
    public function index()
    {
        $bulos = Bulo::with('user')->latest()->take(50)->get();

        return view('bulo8m', compact('bulos'));
    }
}
