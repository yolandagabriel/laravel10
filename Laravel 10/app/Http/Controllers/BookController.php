<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function databuku(){
        $data = Book::orderBy('id','desc')->get();
        return view('buku.databuku',compact('data'));
    }

     public function tambah(){
        return view ('buku.tambah');
     }
     public function buat(Request $request){
      $request->validate([
         'nama_buku' => 'required',
         'jml_hal' => 'required|numeric',
         'penerbit' => 'required',
     ],[
         'nama_buku.required' => ' WAJIB DIISI!',
         'jml_hal.required' => 'WAJIB DIISI!',
         'penerbit.required'=>'WAJIB DIISI!',
         'jml_hal.numeric' => 'HARUS BERUPA NOMOR!',
     ]);
        Book::create ([
            'nama_buku' => $request->nama_buku,
            'jml_hal' => $request->jml_hal,
            'penerbit' => $request->penerbit,
        ]);
        return redirect()->route('admin.test')->with('sukses','Berhasil menambahkan data!');
     }
     public function ubah($id){
        $data = Book::where('id', $id)->first();
        return view('buku.ubah', compact('data'));
     }
     public function update(Request $request){
        Book::where('id',$request->id)->update([
            'nama_buku' =>$request->nama_buku,
            'jml_hal' =>$request->jml_hal,
            'penerbit' =>$request->penerbit,
        ]);
        return redirect()->route('admin.test');
     }

     public function hapus($id){
        Book::where('id', $id)->delete();
        return redirect()->route('admin.test');
     }
}
