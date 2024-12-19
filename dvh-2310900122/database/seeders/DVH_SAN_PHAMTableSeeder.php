<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVH_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "BC01",
            'dvhTenSP' => "Bút chì 2d",
            'dvhHinhAnh' =>"dvh-2310900122/image/tải xuống.jpg",
            'dvhSoLuong' => 150 ,
            'dvhDonGia' =>214900,
            'dvhMaLoai' => 1,
            'dvhTrangThai' =>0
        ]);
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "BC02",
            'dvhTenSP' => "Bút chì 3b",
            'dvhHinhAnh' =>"dvh-2310900122/image/tải xuống (1).jpg",
            'dvhSoLuong' => 120,
            'dvhDonGia' =>939000,
            'dvhMaLoai' => 1,
            'dvhTrangThai' =>0
        ]);
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "BD03",
            'dvhTenSP' => "Bút chì 4b",
            'dvhHinhAnh' =>"dvh-2310900122/image/bút chì.png",
            'dvhSoLuong' => 165,
            'dvhDonGia' => 419900,
            'dvhMaLoai' => 1,
            'dvhTrangThai' =>0
        ]);
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "DV04",
            'dvhTenSP' => "Vở ô li",
            'dvhHinhAnh' =>"dvh-2310900122/image/tải xuống (2).jpg",
            'dvhSoLuong' => 220,
            'dvhDonGia' => 240900,
            'dvhMaLoai' => 1,
            'dvhTrangThai' =>0
        ]);
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "CP04",
            'dvhTenSP' => "Máy Tính Gamming",
            'dvhHinhAnh' =>"dvh-2310900122/image/tải xuống (3).jpg",
            'dvhSoLuong' => 110,
            'dvhDonGia' => 657900,
            'dvhMaLoai' => 2,
            'dvhTrangThai' =>0
        ]);
        DB::table('DVH_SAN_PHAM') -> insert([
            'dvhMaSP' => "CD05",
            'dvhTenSP' => "Máy tính apple",
            'dvhHinhAnh' =>"dvh-2310900122/image/tải xuống (4).jpg",
            'dvhSoLuong' => 98,
            'dvhDonGia' => 106990,
            'dvhMaLoai' => 2,
            'dvhTrangThai' =>0
        ]);
    }
}
