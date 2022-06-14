<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{
    public function kelas()
    {
        $data = Kelas::all();
        $guru = Guru::all();
        return view('kelas.kelas',[
            'data' => $data,
            'guru' => $guru
        ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kelas'=> 'required',
            'walas'=> 'required',
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelas');
    }

    public function editkelas($id)
    {
        $data = Kelas::find ($id);
        $guru = Guru::all();
        return view('kelas.editkelas',[
            'data' => $data,
            'guru' => $guru
        ]);
    }

    public function updatekelas(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kelas'=> 'required',
            'walas'=> 'required',
        ]);
        $data = Kelas::find ($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    public function destroy($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');         
    }
}
