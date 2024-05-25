<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DokterController extends Controller
{
    //menampilkan semua tabel dokter
    public function data()
    {
        $dokter = DB::table('dokter')->get();
    
        return view('dokter.data',['dokter'=>$dokter]);
    }
    public function add(){
        return view('dokter.add');
    }
    // Metode untuk menangani proses penambahan dokter
    public function addProcces(Request $request){
        $request->validate([
            'nama'=>'required|min:1',
            'spesialis'=>'required',
            'nomer_telepon'=>'required',
            'email'=>'email',
            ]);

        DB::table('dokter')->insert(
            [
                'nama'=> $request ->nama,
            'spesialis' => $request -> spesialis,
            'nomer_telepon' => $request -> nomer_telepon,
            'email' => $request ->email]
        );
        return redirect('dokter')->with('status','Data Dokter Berhasil Ditambah!');
    }
    // Metode untuk menampilkan form edit dokter
    public function edit($id){
        $dokter =DB::table('dokter')->where('id',$id)->first();
        return view('dokter/edit', compact('dokter'));
    }
    // Metode untuk menangani proses edit dokter
    public function editProcess(Request $request, $id){
        $request->validate([
            'nama'=>'required|min:1',
            'spesialis'=>'required',
            'nomer_telepon'=>'required',
            'email'=>'email',
            ]);
         
        DB::table('dokter')->where('id', $id)->update([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'nomer_telepon' => $request->nomer_telepon,
            'email' => $request->email
        ]);
    
        return redirect('dokter')->with('status', 'Data Dokter Berhasil Diupdate!');
    }
    // Metode untuk menghapus data dokter
    public function delete($id){
        DB::table('dokter')->where('id',$id)-> delete();
        return redirect('dokter')->with('status', 'Data Dokter Berhasil Dihapus!');
    }
        
    
}
