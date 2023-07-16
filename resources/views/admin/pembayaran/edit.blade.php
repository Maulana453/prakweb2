@extends('admin.layout.app')

@section('content')
<br>
<div class="d-flex justify-content-center">
    @foreach ($pembayaran as $prod)
    <form method="POST" action="{{ url('admin/pembayaran/update/'. $prod->id) }}" class="col-sm-6">
        {{ csrf_field() }}
        <h4 style="text-align: center">Form Edit Data</h4>

        <div class="form-group row">
            <label for="pelanggan_id" class="col-4 col-form-label">Pelanggan</label>
            <div class="col-8">
                <input id="pelanggan_id" name="pelanggan_id" type="text" value="{{ $prod->pelanggan_id }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="produk_id" class="col-4 col-form-label">Produk</label>
            <div class="col-8">
                <input id="produk_id" name="produk_id" type="text" value="{{ $prod->produk_id }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="text" value="{{ $prod->tanggal }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <label for="total" class="col-4 col-form-label">Total</label>
            <div class="col-8">
                <input id="total" name="total" type="text" value="{{ $prod->total }}" class="form-control" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-danger">Simpan Edit</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
