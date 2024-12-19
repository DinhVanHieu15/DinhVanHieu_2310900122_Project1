<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVH_LOAI_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('DVH_LOAI_SAN_PHAM') -> insert([
            'dvhMaLoai' => "BC01",
            'dvhTenLoai' => "Bút Chì",
            'dvhTrangThai' => 0   
          ]);
          DB::table('DVH_LOAI_SAN_PHAM') -> insert([
              'dvhMaLoai' => "QV02",
              'dvhTenLoai' => "Quyển Vở",
              'dvhTrangThai' => 0   
            ]);
            DB::table('DVH_LOAI_SAN_PHAM') -> insert([
              'dvhMaLoai' => "MT03",
              'dvhTenLoai' => "Máy Tính",
              'dvhTrangThai' => 0   
            ]);
    }
}
