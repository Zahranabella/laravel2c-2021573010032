<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Coba\Foo;
use Illuminate\Support\Str;
class PageController extends Controller
{
public function cobaClass()
{
    $foo = new Foo();
    echo $foo->bar();
}
public function index()
{
return "Halaman Home Admin";
}

public function tampil()
{
return "Data Mahasiswa Admin";
}

public function cobaFacade()
{
    echo Str::snake('SedangBelajarLaravelUncover');
    echo "<br>";
    echo Str::kebab('SedangBelajarLaravelUncover');
}
}