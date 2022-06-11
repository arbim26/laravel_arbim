<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function guru()
    {
        $data = Guru::orderBy('created_at','desc')->get();
        return view('guru.guru', compact('data'));
    }


    public function tambahguru()
    {
        return view('guru.tambahguru');
    }

    

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
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
        $data = Guru::find ($id);

        return view('guru.editguru', compact('data'));
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
