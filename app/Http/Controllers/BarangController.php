<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $barangs = Barang::latest()->paginate(5);

        return view('admin.barangs.index',compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'sumber_dana' => 'required',
            'tanggal_pengadaan' => 'required',
            'jumlah_barang' => 'required',
            'merk_barang' => 'required',
            'kategori_barang' => 'required',
            'kondisi_barang' => 'required',
            'deskripsi_barang' => 'required',
        ]);
        Barang::create($request->all());
        return redirect()->route('admin.barangs.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::all(); 
        return view('barang.edit',compact('borrowing', 'books', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $barang->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'sumber_dana' => 'required',
            'tanggal_pengadaan' => 'required',
            'jumlah_barang' => 'required',
            'merk_barang' => 'required',
            'kategori_barang' => 'required',
            'kondisi_barang' => 'required',
            'deskripsi_barang' => 'required',
        ]);
            
        $barang->update($request->all());
    
        return redirect()->route('admin.barangs.index')
                        ->with('success','Berhasil Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
