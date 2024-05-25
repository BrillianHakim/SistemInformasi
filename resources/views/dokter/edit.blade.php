@extends('dashboard')

@section('title','Update Data')

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
                    <li>
                        <a href="#">Dokter</a>
                    </li>
                    <li class="active">Edit</li>
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
                    <strong>Edit Data Dokter</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dokter') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        {{-- Form untuk melakukan pengiriman data dengan metode POST ke URL tertentu. --}}
                        <form action="{{ url('dokter/'.$dokter->id) }}" method="POST">
                            @method('patch');
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Dokter</label>
                                <input type="text" name="nama" class="form-control" value="{{ $dokter ->nama}} " required>
                            </div>
                            <div class="form-group">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" name="spesialis" class="form-control" value="{{ $dokter ->spesialis}} "required>
                            </div>
                            <div class="form-group">
                                <label for="nomer_telepon">Nomor Telepon</label>
                                <input type="text" name="nomer_telepon" class="form-control" value="{{ $dokter ->nomer_telepon}} "required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $dokter ->email}} "required>
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
