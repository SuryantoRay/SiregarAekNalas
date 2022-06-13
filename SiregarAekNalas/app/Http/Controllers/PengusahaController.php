<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\User;
use Auth;
use App\Pengusaha;
use App\Pesanan;
use App\Barang;

class PengusahaController extends Controller
{
    public function dataPribadi($id)
    {
        $user = User::where('id', $id)->get();

        return view('Pengusaha.Data_pribadi', ['User' => $user]);
    }

    public function edit_produk($id){
        $user = Barang::orderBy('id', 'DESC')->where('user_id', $id)->paginate(2);

        return view('Pengusaha.Edit_Produk', ['User' => $user]);
    }

    public function hapus($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->back()->with('success', 'Produk Berhasil Di Hapus');
    }

    public function tambah_produk($id){
        $user = User::where('id', $id)->get();

        return view('Pengusaha.Tambah_produk', ['User' => $user]);
    }

    public function editGambar($id, Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        $tujuan_upload = 'Pembeli/user';
        $file->move($tujuan_upload, $nama_file);

        Pengusaha::where('user_id', $id)->update([
            'file' => $nama_file
        ]);

        return redirect()->back()->with('success', 'Foto Profil Anda Telah Berhasil DI Ganti.');
    }

    public function editData($id, Request $request){
        $this->validate($request, [
            'nama' => 'required|min:6',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'no_handphone' => 'required',
            'whatsapps' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->nama;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->save();

        $pengusaha = Pengusaha::where('user_id', $id)->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_handphone' => $request->no_handphone,
            'whatsapps' => $request->whatsapps
        ]);

        return redirect()->back()->with('success', 'Data Telah Berhasil Di Ubah...!!!');
    }

    public function tambahproduk($id, Request $request){
        $this->validate($request,[
            'nama_produk' => 'required',
            'harga' => 'required','number',
            'stok' => 'required','number',
            'descripsi' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama_produk.required' => 'Nama Produk Harus Di Isi',
            'harga.required' => 'Harga Harus Di Isi',
            'stok.required' => 'Stok Harus Di Isi',
            'descripsi.required' => 'Descripsi Harus Di Isi',
            'gambar.required' => 'Gambar Harus Di Isi',
            'gambar.file' => 'Anda Hanya Dapat Upload File',
            'gambar.image' => 'Anda Hanya Dapat Upload Image',
            'gambar.mimes' => 'File Harus Berupa JPG, PNG, JPEG',
            'gambar.max' => 'Gambar Berukuran MAX 2MB',
        ]);

        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'Pembeli/BarangJualan';
        $file->move($tujuan_upload,$nama_file);

        Barang::create([
            'user_id' => $id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'descripsi' => $request->descripsi,
            'gambar' => $nama_file
        ]);

        return redirect()->back()->with('success', 'Produk Baru Berhasil Di Tambahkan');
    }

    public function edit($id, Request $request){
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required','number',
            'stok' => 'required','number',
            'descripsi' => 'required',
        ]);

        $barang = Barang::find($id);
        $barang->nama_produk = $request->nama_produk;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->descripsi = $request->descripsi;
        $barang->save();

        return redirect()->back()->with('success', 'Produk Berhasil Di Edit');
    }

    public function editgambarP($id, Request $request){
        $this->validate($request, [
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'gambar.required' => 'Gambar Harus Di Isi',
        ]);

        $barang = Barang::find($id);
        $awal = $barang->gambar;
        $ub = [
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/Pembeli/BarangJualan', $awal);
        $barang->update($ub);
        return redirect()->back()->with('success', 'Gambar Berhasil Di Ubah');
    }

    public function home($id){

        return view('Pengusaha.Home');
    }

    public function pesanan($id){
        $pes = DB::table('users')->join('barang', 'users.id', '=', 'barang.user_id')
        ->select('barang.*', 'barang.harga', 'barang.nama_produk', 'barang.gambar')
        ->join('barang_pembeli', 'barang_pembeli.barang_id', '=', 'barang.id')
        ->select('barang.*', 'barang_pembeli.jumlah_pesanan', 'barang_pembeli.total', 'barang_pembeli.barang_id', 'barang_pembeli.id as id_ps')
        ->where('barang.user_id', '=', auth::user()->id)->get();

        return view('Pengusaha.Pesanan', ['Pesanan' => $pes]);
    }

    public function hapusPesanan($id, Request $request){
        $sisa = $request->stok + $request->jumlah_pesanan;

        $barang=Barang::where('id', $request->id_barang)->update([
            'stok' => $sisa,
        ]);

        $pesanan = Pesanan::find($request->id);
        $pesanan->delete();

        return redirect()->back()->with('success', 'Pesanan Yang Di Terima Telah di Batalkan');
    }

    public function lunas($id){
        $beli = Pesanan::find($id);
        $beli->delete();
        return redirect()->back()->with('info', 'Pesanan Telah Dikosongkan Dari Dalam Daftar Pesanan Anda');
    }
}
