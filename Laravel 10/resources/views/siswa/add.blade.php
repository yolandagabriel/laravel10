@extends('layouts.app')

@section('content')
<h3>Tambah Siswa<h3>
    
        <form action="{{ route("admin.insertsiswa") }}" method="post">
        @csrf
        <div class="row">
            <div class="col-ig-3">
                <div class="form-group">
                    <label for="">Nama siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}">
                    <div class="text-danger">
                        @error('nama_siswa')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">no hp</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                    <div class="text-danger">
                        @error('no_hp')
                            {{ $message }}
                        @enderror
                     </div>
                </div>
                <div class="form-group">
                    <label for="">jenis kelamin</label>
                    <select name="jenkel" class="form-control" value="{{ old('jenkel') }}">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                    <div class="text-danger">
                        @error('jenkel')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection