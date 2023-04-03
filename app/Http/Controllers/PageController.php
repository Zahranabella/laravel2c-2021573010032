<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index()
{
// return "Halaman Home";
return view('welcome');
}

public function tampil()
{
// return "Data Mahasiswa";
$arrMahasiswa = ["Megawati","Luhut Panjaitan","Susilo Bambang Kusumo","Prabowo Subianto"];
return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
}
}