@extends('layouts.app')

@section('content')
<h3>Tambah buku<h3>
    
        <form action="{{ route("admin.buatbuku") }}" method="post">
        @csrf
        <div class="row">
            <div class="col-ig-3">
                <div class="form-group">
                    <label for="">Nama buku</label>
                    <input type="text" name="nama_buku" class="form-control" value="{{ old('nama_buku') }}">
                    <div class="text-danger">
                        @error('nama_buku')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">jumlah halaman</label>
                    <input type="text" name="jml_hal" class="form-control" value="{{ old('jml_hal') }}">
                    <div class="text-danger">
                        @error('jml_hal')
                            {{ $message }}
                        @enderror
                     </div>
                </div>
                <div class="form-group">
                    <label for="">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit') }}">
                    <div class="text-danger">
                        @error('penerbit')
                            {{ $message }}
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </form>

@endsection