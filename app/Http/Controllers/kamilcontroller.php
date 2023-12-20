<?php

namespace App\Http\Controllers;

use App\Models\kamila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Psy\CodeCleaner\FunctionContextPass;

class kamilcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=kamila::all();
        return view('isidata.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('isidata.datasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama_depan'=> 'required', 
            'Nama_belakang'=> 'required', 
            'Jenis_kelamin'=> 'required', 
            'Agama'=> 'required', 
            'Alamat'=> 'required' 
        ]);
        $data=[
            'Nama_depan'=> $request->input('Nama_depan'),
            'Nama_belakang'=> $request->input('Nama_belakang'),
            'Jenis_kelamin'=> $request->input('Jenis_kelamin'),
            'Agama'=> $request->input('Agama'),
            'Alamat'=> $request->input('Alamat')
        ];
        kamila::create($data);
        return redirect('isidata');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = kamila::where('Nama_depan', $id)->first();
        return view('isidata.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama_depan'=> 'required', 
            'Nama_belakang'=> 'required', 
            'Jenis_kelamin'=> 'required', 
            'Agama'=> 'required', 
            'Alamat'=> 'required'
        ]);
        $data=[
            'Nama_depan'=> $request->input('Nama_depan'),
            'Nama_belakang'=> $request->input('Nama_belakang'),
            'Jenis_kelamin'=> $request->input('Jenis_kelamin'),
            'Agama'=> $request->input('Agama'),
            'Alamat'=> $request->input('Alamat')
        ];
        kamila::where('Nama_depan',$id)->update($data);
        return redirect('isidata')->with('succes', 'data berhasil ditambahkan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kamila::where('Nama_depan',$id)->delete();
        return redirect('isidata')->with('succes', 'data berhasil dihapus');
    }
}
