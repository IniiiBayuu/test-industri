@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control " name="nama" value="{{ $barang->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control " name="merk" value="{{ $barang->merk }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control " name="harga" value="{{ $barang->harga }}"
                                readonly>
                        
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto barang</label>
                            @if(isset($barang) && $barang->foto)
                            <p>
                                <img src="{{asset('images/barang/' . $barang->foto)}}" class="img-rounded img-responsive"
                                style ="width: 75px; height:75px;" alt="">
                            </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('barang.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection