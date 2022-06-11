<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class agendaguruController extends Controller
{
    public function agendaguru()
    {
        $data = Agenda::orderBy('created_at','desc')->get();
        return view('agenda.agendaguru', compact('data'));
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
        return redirect()->route('agendaguru');
    }

}
