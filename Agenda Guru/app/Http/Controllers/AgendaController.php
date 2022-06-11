<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function agenda()
    {
        $data = Agenda::orderBy('created_at','desc')->get();
        return view('agenda.agenda', compact('data'));
    }

    public function tambahagenda()
    {
        return view('agenda.tambahagenda');
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
