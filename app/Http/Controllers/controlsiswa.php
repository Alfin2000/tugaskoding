<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\siswa;

class controlsiswa extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_siswa = \App\Models\siswa::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_siswa = \App\Models\siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Models\siswa::create($request->all());
        return redirect('/kelas')->with('sukses', 'Data berhasil dimasukkan');
    }
    public function edit($kelas_id)
    {
        $siswa = \App\Models\siswa::find($kelas_id);
        return view('siswa/edit', ['siswa' => $siswa]);
    }
    public function update(Request $request, $kelas_id)
    {
        $siswa = \App\Models\siswa::find($kelas_id);
        $siswa->update($request->all());
        return redirect('/kelas')->with('sukses', 'Data berhasil diedit');
    }
    public function delete($kelas_id)
    {
        $siswa = \App\Models\siswa::find($kelas_id);
        $siswa->delete($siswa);
        return redirect('/kelas')->with('sukses', 'Data berhasil dihapus');
    }
}
