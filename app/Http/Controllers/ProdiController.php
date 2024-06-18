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
        $data = ['nama' => 'sehde', 'foto' => 'sehde.jpg'];
        $prodi = Prodi::all();
        return view('prodi.index', compact('data', 'prodi'));
    }

    public function create()
    {
        $data = ['nama' => 'sehde', 'foto' => 'sehde.jpg'];
        return view('prodi.create', compact(['data']));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'mana_ptodi.required' => 'di isi hulu!',
                'nama_prodi.unique' => 'jangan sama!',
                'nama_prodi.max' => 'nama prodi maksimal 255 karakter'
            ]
        );
        Prodi::create($validateData);
        return redirect('/prodi');
    }
    public function edit(String $id)
    {
        $data = ['nama' => 'sehde', 'foto' => 'sehde.jpg'];
        $prodi=prodi::find($id);
        return view('prodi.edit', compact(['data', 'prodi' ]));
    }
    public function update(Request $request, String $id)
    {
        $validateData = $request->validate(

    
    
    [
        'nama_prodi' => 'required|unique:prodi|max:255'
    ],
    [
        'mana_ptodi.required' => 'di isi hulu!',
        'nama_prodi.unique' => 'jangan sama!',
        'nama_prodi.max' => 'nama prodi maksimal 255 karakter'
    ]
    );
Prodi::where('id' , $id)->update($validateData);
return redirect('/prodi');
    }

public function destroy(String $id)
{
    Prodi::destroy($id);
    return redirect('/prodi');
}

}
