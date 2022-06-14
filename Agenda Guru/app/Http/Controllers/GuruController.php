<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function guru()
    {
        $data = Guru::orderBy('created_at','desc')->get();
        $mapel = Mapel::all();
        return view('guru.guru',[
            'data' => $data,
            'mapel' => $mapel
        ]);
    }


    public function tambahguru()
    {
        $data = Guru::orderBy('created_at','desc')->get();
        $mapel = Mapel::all();
        return view('guru.tambahguru',[
            'data' => $data,
            'mapel' => $mapel
        ]);
    }

    

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password'=> 'required',
            'nama_guru'=> 'required',
            'nik'=> 'required',
            'mata_pelajaran'=> 'required',
        ]);
        Guru::create([
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'nama_guru' =>$request->nama_guru,
            'nik' =>$request->nik,
            'mata_pelajaran' =>$request->mata_pelajaran,
        ]);
        return redirect()->route('guru');
    }

    public function editguru($id)
    {
        $data = Guru::find($id);
        $mapel = Mapel::all();
        return view('guru.editguru',[
            'data' => $data,
            'mapel' => $mapel
        ]);;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required',
            'nama_guru'=> 'required',
            'nik'=> 'required',
            'mata_pelajaran'=> 'required',
        ]);
        Guru::where('id', $id)->update([
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'nama_guru' =>$request->nama_guru,
            'nik' =>$request->nik,
            'mata_pelajaran' =>$request->mata_pelajaran,
        ]);        
        return redirect()->route('guru');
    }

    public function destroy($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect()->route('guru');         
    }
}
