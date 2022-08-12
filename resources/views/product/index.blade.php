@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Admin
                    <a href="{{route('barang.create')}}" class ="btn btn-sm btn-primary" style="float : right">
                    Tambah Data</a>
                </div>

                <div class="card-body">
                <div class="table-responsive">
                <table class="table align-middle" id="dataTable">
                 <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                 </thead>
                 <tbody>
                    @php $no = 1; @endphp
                    @foreach ($barang as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->merk}}</td>
                        <td>{{$data->harga}}</td>
                        <td>
                            <img src="{{ $data->image() }}" style="width: 100px; height:100px;" alt="">
                        </td>
                        <td>
                            <form action="{{route('barang.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{route('barang.edit', $data->id)}}" class ="btn btn-secondary">
                                    Edit
                                </a>
                                <a href="{{route('barang.show', $data->id)}}" class ="btn btn-warning">
                                    Show
                                </a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                    Delete
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
    </div>
</div>
@endsection