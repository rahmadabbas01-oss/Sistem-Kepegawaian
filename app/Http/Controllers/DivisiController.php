<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index(){
        $divisi=Divisi::all();

        return view('divisi.index', compact('divisi'));
    }
}
