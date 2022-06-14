<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function agenda()
    {
        $data = Agenda::orderBy('created_at','desc')->get();
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('agenda.agenda',[
            'data' => $data,
            'guru' => $guru,
            'kelas' => $kelas,
            'mapel' => $mapel
        ]);

    }

    public function tambahagenda()
    {   
        $data = Agenda::orderBy('created_at','desc')->get();
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('agenda.tambahagenda',[
            'data' => $data,
            'guru' => $guru,
            'kelas' => $kelas,
            'mapel' => $mapel
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal'=> 'required',
            'guru_id'=> 'required',
            'mapel_id'=> 'required',
            'materi_pelajaran'=> 'required',
            'jam_pelajaran'=> 'required',
            'kelas_id'=> 'required',
            'jenis_pembelajaran'=> 'required',
            'dokumentasi'=> 'required',
            'keterangan'=> 'required',
        ]);
        $agenda = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save(); 
        }
        return redirect()->route('agenda');
    }

    public function editagenda($id)
    {
        $data = Agenda::find($id);
        $guru = Guru::all();
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        return view('agenda.editagenda',[
            'data' => $data,
            'guru' => $guru,
            'kelas' => $kelas,
            'mapel' => $mapel
        ]);
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
