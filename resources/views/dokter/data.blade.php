@extends('dashboard')

@section('title','Dashboard')

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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Basic table</li>
                </ol>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('content')

<div class="content mt-3">
    
    <div class="animated fadeIn">

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Dokter</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dokter/add') }}" clss="btn btn-success btn-sm">
                        <i class="fa fa-plus">Add</i> 
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>nama</th>
                        <th>spesialis</th>
                        <th>nomer telepon</th>
                        <th>email</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokter as $item)
                            <tr>
                                <td>{{ $loop-> iteration }}</td>
                                <td>{{ $item -> nama }}</td>
                                <td>{{ $item -> spesialis }}</td>
                                <td>{{ $item -> nomer_telepon }}</td>
                                <td>{{ $item -> email }}</td>
                                <td class="text-center">
                                    {{-- Link untuk mengedit dokter berdasarkan id tertentu. --}}
                                    <a href="{{ url('dokter/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('dokter/'.$item->id) }} "method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-denger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

          
      </div>
  
  </div>
@endsection