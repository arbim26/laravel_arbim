<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function agenda()
    {
        $data = Agenda::orderBy('created_at','desc')->get();
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('agenda.agenda',[
            'data' => $data,
            'guru' => $guru,
            'kelas' => $kelas
        ]);

    }

    public function tambahagenda()
    {   
        $data = Agenda::orderBy('created_at','desc')->get();
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('agenda.tambahagenda',[
            'data' => $data,
            'guru' => $guru,
            'kelas' => $kelas
        ]);
    }
    public function store(Request $request)
    {
        // $data = Agenda::create($request->all());
        $agenda = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save(); 
        }
        return redirect()->route('guru');
    }

    public function editagenda($id)
    {
        $agenda = Agenda::find ($id);
        // dd($agenda);
        return view('agenda.editagenda', compact('agenda'));
    }

    public function update(Request $request,$id)
    {
        $agenda = Agenda::find($id);
        $agenda->update($request->all());

        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save(); 
        }
        return redirect('/agenda');
    }

    public function destroy($id)
    {
        $data = Agenda::find($id);
        $data->delete();
        return redirect()->route('agenda');         
    }
}
