<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kategori;
use App\Models\Prodi;

class AdminController extends Controller
{
    public function view_mahasiswa()
    {
        return view('admin.mahasiswa');
    }

    public function view_dosen()
    {
        return view('admin.dosen');
    }

    public function view_staff()
    {
        return view('admin.staff');
    }

    public function view_prodi()
    {
        return view('admin.prodi');
    }

    public function add_prodi(Request $request)
    {
        $prodi = new Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->keterangan = $request->keterangan;
        $prodi->save();
        return redirect()->back();
    }

    public function view_kategori()
    {
        return view('admin.kategori');
    }

    public function add_kategori(Request $request)
    {
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->keterangan = $request->keterangan;
        $kategori->save();
        return redirect()->back();
    }

    public function view_barang()
    {
        return view('admin.barang');
    }

    public function view_peminjaman()
    {
        return view('admin.peminjaman');
    }

    public function view_pengembalian()
    {
        return view('admin.pengembalian');
    }

    
}
