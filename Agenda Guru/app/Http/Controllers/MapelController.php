<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function mapel()
    {
        $data = mapel::orderBy('created_at','desc')->get();
        return view('mapel.mapel', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'mata_pelajaran'=> 'required',
        ]);
        Mapel::create($request->all());
        return redirect()->route('mapel');
    }

    public function editmaple($id)
    {
        $data = Maple::find ($id);
       return view('mapel.editmapel', compact('data'));
    }
}
