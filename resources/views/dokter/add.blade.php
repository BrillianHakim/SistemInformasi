@extends('dashboard')

@section('title','Tambah Dokter')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dokter</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dokter</a></li>
                    <li class="active">Tambah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Data Dokter</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dokter') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('dokter') }}" method="POST">
                            <!-- 
                            Token CSRF digunakan untuk melindungi formulir dari serangan CSRF (Cross-Site Request Forgery).
                            Token ini secara otomatis ditambahkan ke formulir oleh Laravel.
                            Digunakan untuk memastikan bahwa permintaan POST yang masuk ke aplikasi berasal dari sumber yang dapat dipercaya.
                            -->
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Dokter</label>
                                <input type="text" name="nama" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" name="spesialis" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nomer_telepon">Nomor Telepon</label>
                                <input type="text" name="nomer_telepon" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
