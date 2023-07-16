@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    <form method="POST" action="{{ url('admin/transaksi/store') }}" class="col-sm-6">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="pelanggan_id" class="col-sm-4 col-form-label">Pelanggan</label>
            <div class="col-sm-8">
                <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
                <input id="tanggal" name="tanggal" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
            <div class="col-sm-8">
                <input id="keterangan" name="keterangan" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <label for="produk_id" class="col-sm-4 col-form-label">Produk</label>
            <div class="col-sm-8">
                <input id="produk_id" name="produk_id" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div><br>
        <div class="form-group row">
            <div class="offset-sm-4 col-sm-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

<style>
    .form-control {
        background-color: red;
        color: white;
    }
</style>
@endsection
