@extends('admin.layout.app')
@section('content')
@if(Auth::user()->role !='pelanggan')

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4 bg-primary text-white">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-table me-2"></i>Data Pelanggan</h5>
            @if (Auth::user()->role == 'admin')
            <a href="{{url('admin/pelanggan/create')}}" class="btn btn-danger">Tambah Data</a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-white" id="datatablesSimple" width="100%" cellspacing="0">
                    <thead> 

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($pelanggan as $prod)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $prod->nama }}</td>
                            <td>{{ $prod->alamat }}</td>
                            <td>{{ $prod->no_hp }}</td>
                            <td>
                                <a href="{{url ('admin/pelanggan/edit/'. $prod->id) }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{url ('admin/pelanggan/delete/'. $prod->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @php
                        $no++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@else
@include('admin.acces_denied')
@endif
@endsection
