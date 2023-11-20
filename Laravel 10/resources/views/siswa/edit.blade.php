@extends('layouts.app')

@section('content')
<h3>Tambah Siswa<h3>
    
        <form action="{{ route("admin.updatesiswa") }}" method="post">
        @csrf
        <div class="row">
            <input type ="text" name ="id" value ="{{ $data->id }}" hidden >
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Nama siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" value="{{  $data->nama_siswa }}">
                </div>
                <div class="form-group">
                    <label for="">no hp</label>
                    <input type="text" name="no_hp" class="form-control" value="{{  $data->no_hp }}">
                </div>
                <div class="form-group">
                    <label for="">jenis kelamin</label>
                    <select name="jenkel" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="l" {{  $data->jenkel == 'l' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="p" {{  $data->jenkel == 'p' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection