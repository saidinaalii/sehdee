<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => 'hitler', 'foto' =>'opp.jpeg'];
        $prodi = DB::table('prodi')->get();
        return view('prodi', compact ('data', 'prodi')); 
    }

    public function show($id)
    {

    }
}

