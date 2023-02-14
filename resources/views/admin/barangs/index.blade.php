@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang.create')}}"> Tambah Data</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Tanggal Pengadaan</th>
                <th>Jumlah Barang</th>
                <th>Merk Barang</th>
                <th>Kategori Barang</th>
                <th>Kondisi Barang</th>
                <th>Deskripsi Barang</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($barangs as $barang)
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{  $barang->nama_barang }}</td>
            <td>{{  $barang->jenis_barang }}</td>
            <td>{{  $barang->tanggal_pengadaan }}</td>
            <td>{{  $barang->jumlah_barang }}</td>
            <td>{{  $barang->merk_barang}}</td>
            <td>{{  $barang->kategori_barang}}</td>
            <td>{{  $barang->kondisi_barang}}</td>
            <td>{{  $barang->deskripsi_barang}}</td>
            <td>
                {{-- <form action="{{ route('barangs.destroy',$barang->id) }}" method="POST">
                    
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </table>
</div>
    
    {!! $barangs->links() !!}
        
@endsection