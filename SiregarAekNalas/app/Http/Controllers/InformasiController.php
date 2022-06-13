<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Auth;
use App\Desa;
use App\User;
use App\Gambar;
use App\Pembeli;
use App\Berita;
use App\Pengusaha; 

class InformasiController extends Controller
{
    public function index(){
        return view("Informasi.Beranda");
    }

    public function lokasi(){
        $desa = Desa::all();
        return view('Informasi.Lokasi', ['desa' => $desa]);
    }

    public function berita(){
        $berita = Berita::orderBy('id', 'DESC')->paginate(9);

        return view('Informasi.Berita', ['Berita' => $berita]);
    }

    public function bacabaca($id) {
        $berita = Berita::where('id', $id)->get();

        return view('Informasi.Baca_Berita', ['Baca' => $berita]);
    }

    public function foto(){
        $gambar = Gambar::orderBy('id', 'DESC')->paginate(9);

        return view('Informasi.Foto', ['Gambar' => $gambar]);
    }

    public function saran(){
        return view('Informasi.Saran');
    }

    public function register(){
        return view('Registrasi');
    }

    public function pro_registrasi(Request $request){
        $this->validate($request, [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'posisi' => 'required',
        ], [
            'name.required' => 'Anda Harus Memasukkan Nama Lengkap Anda',
            'name.min' => 'Harus Terdiri Dari 6 Huruf',
            'email.required' => 'Anda Harus Memasukkan Nama Email anda',
            'email.email' => 'Yang Anda Masukkan Harus Email',
            'password.required' => 'Anda Harus Memasukkan Password',
            'password.min' => 'Panjang Password min 8 huruf atau angka',
            'jenis_kelamin.required' => 'Anda Harus Isi Jenis Kelamin Anda',
            'alamat.required' => 'Anda Harus Memasukkan Alamar Anda',
            'posisi.required' => 'Anda Harus Memasukkan Peran anda'
        ]);

        User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'posisi' => $request->posisi
        ]);

        $da = User::orderBy('id', 'DESC')->paginate(1);

        if ($request->posisi == 'Pengusaha'){
            Pengusaha::Create([
                'user_id' => $da[0]->id,
                'nama' => $request->name,
                'tanggal_lahir' => '1000-01-01',
                'no_handphone' => '-',
                'whatsapps' => '-',
                'file' => '-'
            ]);

            return redirect('/login')->with('success', 'Pendaftaran Akun Sebagai Pengusaha Berhasil, Silahkan Login');

        } else if ($request->posisi == 'Pembeli'){
            Pembeli::Create([
                'user_id' => $da[0]->id,
                'nama' => $request->name,
                'tanggal_lahir' => '1000-01-01',
                'no_handphone' => '-',
                'whatsapps' => '-',
                'file' => '-'
            ]);

            return redirect('/login')->with('success', 'Pendaftaran Akun Sebagai User Berhasil, Silahkan Login');

        }

        return redirect('/login')->with('info', 'Pendaftaran Gagal Silahkan Periksa Data Anda');
    }

    public function login(){
        return view('Login');
    }

}
