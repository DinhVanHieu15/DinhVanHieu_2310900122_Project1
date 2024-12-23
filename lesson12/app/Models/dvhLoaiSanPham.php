<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvhLoaiSanPham extends Model
{
    use HasFactory;

    protected $table="dvhLoaiSanPham";
    protected $fillable = [
        'dvhMaLoai',
        'dvhTenLoai',
        'dvhTrangThai',
    ];
}
