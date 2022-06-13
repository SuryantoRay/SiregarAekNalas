<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Barang;
use App\Pembeli;
use App\Pengusaha;
use Auth;
use App\Pesanan;

class PembeliController extends Controller
{
    public function home($id)
    {
        $user = User::all();
        return view('Pembeli.Home', ['User' => $user]);
    }

    public function beli($id, Request $request)
    {
        $barang = Barang::Where('id', $request->id)->get();

        return view('Pembeli.Beli', ['Barang' => $barang]);
    }

    public function dataPribadi($id)
    {
        $user = User::where('id', $id)->get();

        return view('Pembeli.Data_pribadi', ['User' => $user]);
    }

    public function pesanan($id)
    {
        $pes = DB::table('pembeli')->join('barang_pembeli', 'pembeli.id', '=', 'barang_pembeli.pembeli_id')
        ->select('pembeli.*', 'barang_pembeli.total', 'barang_pesanan.jumlah_pesanan', 'barang_pesanan.id')
        ->join('barang', 'barang_pembeli.barang_id', '=', 'barang.id')
        ->select('barang_pembeli.*', 'barang.gambar', 'barang.nama_produk', 'barang.harga', 'barang.stok', 'barang.id as id_barang')
        ->where('barang_pembeli.pembeli_id', '=', auth::user()->pembeli->id)->get();
        // $pembeli = Pembeli::where('id', auth::user()->pembeli->id)->get();
        // $pesanan = Pesanan::where('pembeli_id', auth::user()->pembeli->id)->get();

        return view('Pembeli.Pesanan', ['Pesanan' => $pes]);
    }

    public function buy($id, Request $request)
    {
        if ($request->stok < $request->jumlah_pesanan) {
            return redirect('/home/' . $id)->with('info', 'Jumlah Pesanan Anda Melewati Stok Yang Tersedia');
        } else

            $total = $request->jumlah_pesanan * $request->harga;

        $sisa = $request->stok - $request->jumlah_pesanan;

        $barang = Barang::find($request->barang_id);
        $barang->stok = $sisa;
        $barang->save();

        Pesanan::Create([
            'barang_id' => $request->barang_id,
            'pembeli_id' => $request->id_p,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'total' => $total,
        ]);

        return redirect('/pesanan/' . $id)->with('success', 'Pesanan Anda Telah Di masukkan Dalam Keranjang');
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

        Pembeli::where('user_id', $id)->update([
            'file' => $nama_file
        ]);

        return redirect()->back()->with('success', 'Foto Profil Anda Telah Berhasil DI Ganti.');
    }

    public function editData($id, Request $request)
    {
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

        $pengusaha = Pembeli::where('user_id', $id)->update([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_handphone' => $request->no_handphone,
            'whatsapps' => $request->whatsapps
        ]);

        return redirect()->back()->with('success', 'Data Telah Berhasil Di Ubah...!!!');
    }

    public function hapus($id, Request $request){
        $sisa = $request->stok + $request->jumlah_pesanan;

        $barang=Barang::where('id', $request->id_barang)->update([
            'stok' => $sisa,
        ]);

        $pesanan = Pesanan::find($id);
        $pesanan->delete();

        return redirect()->back()->with('success', 'Pesanan Anda Telah di Batalkan');
    }
}
