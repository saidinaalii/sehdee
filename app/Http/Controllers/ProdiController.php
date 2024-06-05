<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => 'sehde', 'foto' => 'ss.jpg'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('data', 'prodi'));
    }

    public function create()
    {
        $data = ['nama' => 'sehde', 'foto' => 'ss.jpg'];
        return view('prodi.create', compact(['data']));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
        );
        Prodi::create($validateData);
        return redirect('/prodi');
    }
}
