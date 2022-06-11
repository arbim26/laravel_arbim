<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function kelas()
    {
        $data = Kelas::all();
        return view('kelas.kelas', compact('data'));
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
       return view('kelas.editkelas', compact('data'));
    }

    public function updatekelas(Request $request, $id)
    {
        $this->validate($request, [
            'nama_keals'=> 'required',
            'walas'=> 'required',
        ]);
        $data = Kelas::find ($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }

    // public function update($id, request $request)
    // {
    //     $warga = Kelas::find($id);
    //     $warga->update($request->except(['_token','submit']));
    //     return redirect('/kelas');    
    // }

    public function destroy($id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');         
    }
}
