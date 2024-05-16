<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    //
    public function index(){
        return view('karyawan.index', [
            'karyawan' => Karyawan::all()
        ]);
    }

    public function insert(){
        return view('karyawan.insert');
    }

    public function create(Request $data){
        $validatedData = $data->validate([
            'nama' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'gaji' => 'required|integer',
            'status' => 'required|boolean'
        ]);
        Karyawan::create([
            'nama' => $data->nama,
            'tanggal_lahir' => $data->tanggal_lahir,
            'gaji' => $data->gaji,
            'status' => $data->status
        ]);

        return redirect('/');
    }

    public function update(Request $data){
        $karyawan = Karyawan::where('id', $data->id)->update([
            'nama' => $data->nama,
            'tanggal_lahir' => $data->tanggal_lahir,
            'gaji' => $data->gaji,
            'status' => $data->status
        ]);

        return redirect('/');
    }

    public function delete(Karyawan $karyawan){
        $karyawan->destroy($karyawan->id);
        return redirect('/');
    }

    public function edit(Karyawan $karyawan){
        return view('karyawan.edit', [
            'karyawan' => $karyawan
        ]);
    }
}
