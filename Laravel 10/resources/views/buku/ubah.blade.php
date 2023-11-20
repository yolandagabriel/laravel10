@extends('layouts.app')

@section('content')
<h3>Tambah buku<h3>
    
        <form action="{{ route("admin.update") }}" method="post">
        @csrf
        <div class="row">
            <input type="text" name="id" value="{{ $data->id }}" hidden>
            <div class="col-ig-3">
                <div class="form-group">
                    <label for="">Nama buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="{{ $data->nama_buku}}">
                    
                </div>
                <div class="form-group">
                    <label for="">jumlah halaman</label>
                    <input type="text" name="jml_hal" class="form-control" value="{{ $data->jml_hal }}">
                    
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{ $data->penerbit }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </form>

@endsection