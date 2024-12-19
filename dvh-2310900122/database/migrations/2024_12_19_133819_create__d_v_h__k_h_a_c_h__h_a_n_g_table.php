<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('DVH_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table -> string('dvhMaKH',255)->unique();
            $table -> string('dvhTenKH',255);
            $table -> string('dvhEmail',255);
            $table -> string('dvhMatKhau',255);
            $table -> string('dvhDienThoai',255);
            $table -> string('dvhDiaChi',255);
            $table -> date('dvhNgayDK');
            $table -> tinyInteger('dvhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DVH_KHACH_HANG');
    }
};
