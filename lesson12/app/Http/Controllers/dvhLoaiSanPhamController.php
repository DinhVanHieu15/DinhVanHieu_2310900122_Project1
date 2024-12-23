<?php

namespace App\Http\Controllers;

use App\Models\dvhLoaiSanPham;
use Illuminate\Http\Request;

class dvhLoaiSanPhamController extends Controller
{
    //admin

    //list

    public  function dvhlist(){
        $dvhLoaiSanPham = dvhLoaiSanPham::all();
        return view('dvhAdmin.dvhLoaiSanPham.dvh-list');
    }
}
