<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// /*membuat route*/
// Route::get('/hello', function(){
//     return 'Hello World';
// });

// Route::get('/belajar', function() {
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar Laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba', function() {
//     echo '<h2 style ="text-align:center"><u>Welcome Profil Coba</u></h2>';
// });

// /*route parameter*/
// Route::get('/mahasiswa/{nama}',function($nama){
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// /*route dengan 2 parameter*/
// Route::get('/stok_barang/{jenis}/{merek}',function($jenis,$merek){
//     return "Cek sisa stok untuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}',function($a,$b){
//     echo "Cek sisa stok untuk $a $b";
// });

// /*route dengan optional parameter*/
// Route::get('/stok_barang/{jenis?}/{merek?}',function($a='smartphone',$b='samsung'){
//     return "Cek sisa stok untuk $a $b";
// });

// /*route parameter dengan regular ekspression*/
// Route::get('/user/{id}',function ($id){
//     return "Tampilkan user dengan id = $id";
// });

// Route::get('/user/{id}',function ($id){
//     return "Tampilkan user dengan id = $id";
// })->where('id','[0-9]+');

// Route::get('/user/{id}',function ($id){
//     return "Tampilkan user dengan id = $id";
// })->where('id','[A-Z]{2}[0-9]+');

// /*route redirect*/
// Route::get('/hubungi-kami',function(){
//     return '<h1>Hubungi Kami</h1>';
// });

// Route::redirect('/contact-us','/hubungi kami');

// /*route group*/
// Route::get('admin/mahasiswa',function (){
//     return "<h1>Daftar Mahasiswa</h1>";
// });
// Route::get('admin/dosen',function (){
//     return "<h1>Daftar Dosen</h1>";
// });
// Route::get('admin/karyawan',function (){
//     return "<h1>Daftar Karyawan</h1>";
// });

// Route::prefix('/admin')-> group(function (){
//     Route::get('/mahasiswa', function (){
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen', function (){
//         echo "<h1>Daftar Dosen</h1>";
//     });
//     Route::get('/karyawan', function (){
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// /*route fallback*/
// Route::fallback(function (){
//     return "Maaf, alamat tidak ditemukan";
// });

// /*route priority*/
// Route::get('/buku/1', function (){
//     return "Buku ke-1";
// });
// Route::get('/buku/1', function (){
//     return "Buku saya ke-1";
// });
// Route::get('/buku/1', function (){
//     return "Buku kita ke-1";
// });

// Route::get('/buku/1', function ($a){
//     return "Buku ke-$a";
// });
// Route::get('/buku/1', function ($b){
//     return "Buku saya ke-$b";
// });
// Route::get('/buku/1', function ($c){
//     return "Buku kita ke-$c";
// });

// Route::get('mahasiswa/andi', function (){
//     echo "Halaman mahasiswa andi";
// });
// /*penulisan di atas tidak ada bedanya dengan :*/
// Route::get('/mahasiswa andi', function (){
//     echo "Halaman mahasiswa andi";
// });

/*Membuat View*/
Route::get('/home',function(){
    return View('halaman_home');
});

Route::get('/mahasiswa', function(){
    return View::make('mahasiswa');
});

/*Membuat struktur folder view*/
Route::get('/mahasiswa', function(){
    return View('kampus.mahasiswa');
});
/*sama aja jika ditulis seperti ini
Route::get('/mahasiswa', function(){
    return View('kampus/mahasiswa');
});*/

/*mengirim data ke view sebagai argumaen*/
Route::get('/mahasiswa',function(){
    return view('kampus.mahasiswa',["mahasiswa01"=>"Maulana Sultansyah"]);
});

/*untuk data yang lebih banyak*/
Route::get('/mahasiswa', function(){
    return view('kampus.mahasiswa',
    [
        "mahasiswa01"=>"Indra Kenz",
        "mahasiswa02"=>"Doni Salmanan",
        "mahasiswa03"=>"Ulfi Rizkia",
        "mahasiswa04"=>"Deliana Putri"
    ]);
});

/*agar lebih rapi :
Route::get('/mahasiswa', function(){
    $arrMahasiswa = [
        "mahasiswa01"=>"Indra Kenz",
        "mahasiswa02"=>"Doni Salmanan",
        "mahasiswa03"=>"Ulfi Rizkia",
        "mahasiswa04"=>"Deliana Putri"
    ];
    return view('kampus.mahasiswa', $arrMahasiswa);
});*/

/*nested array*/
Route::get('/mahasiswa', function (){
    $arrMahasiswa = ["Doni Sadikin", "Syadzwina Sahara", "Deliana Putri","Indra Kenz"];
    return view('kampus.mahasiswa',['mahasiswa'=>$arrMahasiswa]);
});

/*mengirim data view menggunakan method with*/
Route::get('/mahasiswa', function(){
    return view('kampus.mahasiswa')->with('mahasiswa01','Risa Lestari');
});