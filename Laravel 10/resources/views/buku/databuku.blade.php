@extends('layouts.app')

@section('content')
@if (session('sukses'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i>Sukses!</h5>
{{ session ('sukses') }}
</div>
@endif
        <a href="{{ route('admin.tambahbuku') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table bordered">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Jumlah Halaman</th>
                <th>Penerbit</th>
                <th>Aksi</th>
            </tr>  
            <?php $no=1; ?>
            @foreach ($data as $d)
            <tr>
                <td>{{ $no++  }}</td>
                <td>{{ $d-> nama_buku }}</td>
                <td>{{ $d-> jml_hal }}</td>
                <td>{{ $d-> penerbit }}</td>
                <td>
                    <a href="{{ route('admin.ubahbuku',['id' => $d->id]) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('admin.hapus',['id' => $d->id]) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>   
           @endforeach
        </table>
@endsection