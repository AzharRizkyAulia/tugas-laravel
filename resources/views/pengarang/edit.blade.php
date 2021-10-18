@extends('layouts.admin')

@section('header')
Halaman Edit
@endsection

@section('content')
@extends('layouts.admin')

@section('header')
Halaman Edit
@endsection

@section('content')
<a class="btn btn-danger ml-2" href="{{ route('pengarang.index') }}">Kembali</a>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-center">
                    <h3>Edit Data Pengarang Buku</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('pengarang.update', $pengarang->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama Pengarang</label>
                            <input type="text" value="{{$pengarang->nama_pengarang }}" class="form-control" name="nama" placeholder="Masukan Nama Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" value="{{$pengarang->email}}" class="form-control" name="email" placeholder="Masukan Email Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" value="{{$pengarang->tlp}}" class="form-control" name="telepon" placeholder="Masukan Nomor Telepon Pengarang...." required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                Simpan Perubahan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@endsection