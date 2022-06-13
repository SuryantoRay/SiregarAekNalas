<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengusaha;
use App\User;
use App\Desa;
use Auth;
use App\Berita;
use App\Gambar;
use App\Kategori;
use App\Pembeli;

class AdminController extends Controller
{
    public function admin(){
        if (Auth::user()->posisi == 'Pengusaha')
        {
            return view('Pengusaha.Home');
        }
        else if (Auth::user()->posisi == 'Admin')
        {
            return view('Admin.Dashboard');
        }
    }

    public function daftarPE(){
        $pengusaha = Pengusaha::orderBy('id', 'DESC')->paginate(3);

        return view('admin.Daftar_P', ['Pengusaha' => $pengusaha]);
    }

    public function daftarPM(){
        $pembeli = Pembeli::orderBy('id', 'DESC')->paginate(3);

        return view('admin.Daftar_PM', ['Pembeli' => $pembeli]);
    }

    public function umum(){
        $Desa = Desa::all();

        return view('admin.Info', ['Desa' => $Desa]);
    }

    public function blokir($id){
        $pp = User::find($id);
        $pp->delete();
        $pe = Pengusaha::where('user_id', $id)->delete();
        return redirect()->back()->with('success', 'Akun Pengusaha Telah Di Hapus / Di Blokir');
    }

    public function blokirPM($id){
        $pp = User::find($id);
        $pp->delete();
        $pe = Pembeli::where('user_id', $id)->delete();
        return redirect()->back()->with('success', 'Akun Pembeli Telah Di Hapus / Di Blokir');
    }

    public function editUM($id, Request $request){
        $desa = Desa::find($id);
        $desa->negara = $request->negara;
        $desa->kabupaten = $request->kabupaten;
        $desa->provinsi = $request->provinsi;
        $desa->kecamatan = $request->kecamatan;
        $desa->kodepos = $request->kodepos;
        $desa->save();

        return redirect()->back()->with('success', 'Data Telah Berhasil Di Update !');
    }

    public function gambarM(){
        $gambar = Gambar::orderBy('id', 'DESC')->paginate(3);

        return view('admin.Gambar', ['Gambar' => $gambar]);
    }

    public function gambarEDP(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama.required' => 'Nama Produk Harus Di Isi',
            'gambar.required' => 'Gambar Harus Di Isi',
            'gambar.file' => 'Anda Hanya Dapat Upload File',
            'gambar.image' => 'Anda Hanya Dapat Upload Image',
            'gambar.mimes' => 'File Harus Berupa JPG, PNG, JPEG',
            'gambar.max' => 'Gambar Berukuran MAX 2MB',
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'Admin/Gambar';
        $file->move($tujuan_upload,$nama_file);

        Gambar::create([
            'nama' => $request->nama,
            'gambar' => $nama_file
        ]);

        return redirect()->back()->with('success', 'Gambar Telah Di Tambahkan');
    }

    public function editEGH($id, Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'gambar.required' => 'Gambar Harus Di Isi',
            'nama.required' => 'Nama Produk Harus Di Isi',
            'gambar.file' => 'Anda Hanya Dapat Upload File',
            'gambar.image' => 'Anda Hanya Dapat Upload Image',
            'gambar.mimes' => 'File Harus Berupa JPG, PNG, JPEG',
            'gambar.max' => 'Gambar Berukuran MAX 2MB',
        ]);

        $barang = Gambar::find($id);
        $awal = $barang->gambar;
        $ub = [
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/Admin/Gambar', $awal);
        $barang->update($ub);

        return redirect()->back()->with('success', 'Data Berhasil Di Ubah');
    }

    public function hapusGM($id){
        $rr = Gambar::find($id);
        $rr->delete();

        return redirect()->back()->with('success', 'Data Gambar Berhasil Di hapus');
    }

    public function BeritaA($id){
        return view('Admin.Berita');
    }

    public function BeritaK($id){
        $kategori = Kategori::paginate(5);

        return view('Admin.Kategori', ['Kategori' => $kategori]);
    }

    public function simpan(Request $request){
        $this->validate($request, [
            'kategori' => 'required',
            'alias' => 'required',
            'terbit' => 'required'
        ], [
            'kategori.required' => 'Kategori Harus Di Isi',
            'alias.required' => 'Alias Harus Di Isi',
            'terbit.required' => 'Terbit Harus Di Isi',
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
            'alias' => $request->alias,
            'terbit' => $request->terbit,
        ]);

        return redirect()->back()->with('success', 'Kategori Berhasil Ditambahkan');
    }

    public function EditBerita($id, Request $request){
        $this->validate($request, [
            'kategori' => 'required',
            'alias' => 'required',
            'terbit' => 'required'
        ], [
            'kategori.required' => 'Kategori Harus Di Isi',
            'alias.required' => 'Alias Harus Di Isi',
            'terbit.required' => 'Terbit Harus Di Isi',
        ]);

        $kategori = Kategori::find($id);
        $kategori->kategori = $request->kategori;
        $kategori->alias = $request->alias;
        $kategori->terbit = $request->terbit;
        $kategori->save();


        return redirect()->back()->with('success', 'Kategori Berhasil Di Edit');
    }

    public function hapusberita($id){
        $kategori = Kategori::find($id);
        $kategori->delete();

        return redirect()->back()->with('info', 'Kategori Berhasil Di Hapus');
    }

    public function Info(){
        $kategori = Kategori::all();

        return view('admin.Berita_Info', ['Kategori' => $kategori]);
    }

    public function tmInfo(Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required|min:50',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'teks' => 'required|min:20',
        ], [
            'judul.required' => 'Judul Berita Harus Di Isi',
            'kategori.required' => 'Kategori Berita Harus Di Isi',
            'isi.required' => 'Isi Berita Harus Di Isi',
            'isi.min' => 'Isi Haris Minimal 50',
            'teks.required' => 'text Harus Di Isi',
            'teks.min' => 'Texs Haris Minimal 20 Huruf',
            'gambar.required' => 'Gambar Harus Di Isi',
            'gambar.file' => 'Anda Hanya Dapat Upload File',
            'gambar.image' => 'Anda Hanya Dapat Upload Image',
            'gambar.mimes' => 'File Harus Berupa JPG, PNG, JPEG',
            'gambar.max' => 'Gambar Berukuran MAX 2MB',
        ]);



        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'Admin/Berita';
        $file->move($tujuan_upload,$nama_file);

        Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'gambar' => $nama_file,
            'teks' => $request->teks
        ]);

        return redirect()->back()->with('success', 'Berita telah Berhasil Di Tambahkan');
    }

    public function lihat(){
        $berita = Berita::all();

        return view('Admin.Lihat_Berita', ['Berita' => $berita]);
    }

    public function hapusberita1($id){
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->back()->with('info', 'Berita Berhasil Di Hapus');
    }

    public function eeee($id){
        $berita = Berita::where('id', $id)->get();
        $kategori = Kategori::all();

        return view('admin.Edit', ['Berita' => $berita, 'Kategori' => $kategori]);
    }

    public function eeee5($id, Request $request){
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required|min:50',
            'teks' => 'required|min:20',
        ], [
            'judul.required' => 'Judul Berita Harus Di Isi',
            'isi.required' => 'Isi Berita Harus Di Isi',
            'isi.min' => 'Isi Haris Minimal 50',
            'teks.required' => 'text Harus Di Isi',
            'teks.min' => 'Texs Haris Minimal 20 Huruf',
        ]);

        Berita::where('id', $id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'teks' => $request->teks,
        ]);

        return redirect()->back()->with('success', 'Berita Berhasil Di Edit');
    }
}
