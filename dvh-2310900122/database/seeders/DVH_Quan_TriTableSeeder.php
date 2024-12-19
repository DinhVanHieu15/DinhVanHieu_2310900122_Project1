<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DVH_Quan_TriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dvhMatKhau = md5("123456@a");
        DB::table('DVH_Quan_Tri')->insert([
            'dvhTaiKhoan'=>"dinhvanhieu1508@gmail.com",
            'dvhMatKhau' => $dvhMatKhau,
            'dvhTrangThai'=>0
        ]);
        DB::table('DVH_Quan_Tri')->insert([
            'dvhTaiKhoan'=>"0383167565",
            'dvhMatKhau' => $dvhMatKhau,
            'dvhTrangThai'=>0
        ]);
    }
}
