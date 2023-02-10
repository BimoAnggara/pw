@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
    <br>   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="{{ route('barangs.update',$barang->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf

        @method('PUT')
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang</strong>
                    <input type="text" name="nama_barang" class="form-control" placeholder="nama_barang" value="{{$barang->nama_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Barang</strong>
                    <input type="text" name="jenis_barang" class="form-control" placeholder="jenis_barang" value="{{$barang->jenis_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Pengadaan</strong>
                    <input type="date" name="tanggal_pengadaan" class="form-control" placeholder="tanggal_pengadaan" value="{{$barang->tanggal_pengadaan}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Barang</strong>
                    <input type="text" name="jumlah_barnag" class="form-control" placeholder="jumlah_barang" value="{{$barang->jumlah_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Merk Barang</strong>
                    <input type="text" name="tanggal_pengadaan" class="form-control" placeholder="tanggal_pengadaan" value="{{$barang->kondisi_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kondisi Barang</strong>
                    <input type="text" name="kondisi_barang" class="form-control" placeholder="kondisi_barang" value="{{$barang->kondisi_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi Barang</strong>
                    <input type="text" name=deskripsi_barang" class="form-control" placeholder="deskripsi_barang" value="{{$barang->deskripsi_barang}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        
    </form>
@endsection