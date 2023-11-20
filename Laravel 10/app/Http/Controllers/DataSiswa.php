<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class DataSiswa extends Controller
{
    public function dataSiswa(){
        $data = Student::orderBy('id','desc')->get();
        return view('siswa.data-siswa', compact('data'));
    }
    public function add (){
        return view('siswa.add');
    }
    public function insert(Request $request){
       $request->validate([
            'nama_siswa' => 'required',
            'no_hp' => 'required|numeric',
            'jenkel' => 'required',
        ],[
            'nama_siswa.required' => 'NAMA SISWA WAJIB !',
            'no_hp.required' => 'NO HANDPHONE WAJIB DIISI!',
            'jenkel.required'=>'JENIS KELAMIN WAJIB DIISI!',
            'no_hp.numeric' => 'NO HANDPHONE HARUS BERUPA NOMOR!',
        ]);
       
        Student::create([
            'nama_siswa' => $request->nama_siswa,
            'no_hp' => $request->no_hp,
            'jenkel' => $request->jenkel,
        ]);
        return redirect()->route('admin.datasiswa')->with('sukses','Berhasil menambahkan data!');
    }

    public function edit($id){
        $data = Student::where('id',$id)->first();
        return view('siswa.edit',compact('data'));    
    }
    public function update(Request $request){
        Student::where('id',$request->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'no_hp' => $request->no_hp,
            'jenkel' => $request->jenkel,
        ]);
        return redirect()->route('admin.datasiswa');
    }
    public function delete($id){
        Student::where('id',$id)->delete();
        return redirect()->route('admin.datasiswa');
    }
}
