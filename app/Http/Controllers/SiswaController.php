<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Siswa;
use Illuminate\View\View;

class SiswaController extends Controller
{
    public function create() {
        return view('siswa.create');
    }

    public function index() {
        $siswaModel = new Siswa;

        $semuaSiswa = $siswaModel->all();

        return view('siswa.index', compact('semuaSiswa'));
    }

    public function show($id_siswa) {
        $siswaModel = new Siswa;
        $siswa = $siswaModel->find($id_siswa);

        return view('siswa.show', compact('siswa'));
    }

    public function store(Request $request) {
        $siswa = new Siswa;
        $siswa->nama = $request->input('nama');
        $siswa->alamat = $request->input('alamat');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->save();

        return redirect('/siswa')->with('flash_message', 'Siswa berhasil ditambahkan');
    }

    public function edit($id_siswa) {
        $siswaModel = new Siswa;

        $siswa = $siswaModel->find($id_siswa);

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id_siswa) {
        $siswaModel = new Siswa;
// Menggunakan instance untuk mencari siswa berdasarkan ID
        $siswa = $siswaModel->find($id_siswa);
// Mengupdate data siswa
        $siswa->nama = $request->input('nama');
        $siswa->alamat = $request->input('alamat');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->save();

        return redirect('/siswa')->with('success', 'Siswa berhasil diperbarui');
    }

    public function destroy($id_siswa) {
        // Membuat instance dari model Siswa
        $siswaModel = new Siswa;

        // Menggunakan instance untuk mencari siswa berdasarkan ID
        $siswa = $siswaModel->find($id_siswa);

        // Menghapus siswa yang ditemukan
        $siswa->delete();

        // Redirect ke halaman daftar siswa dengan pesan sukses
        return redirect('/siswa')->with('success', 'Siswa berhasil dihapus.');
    }
}
