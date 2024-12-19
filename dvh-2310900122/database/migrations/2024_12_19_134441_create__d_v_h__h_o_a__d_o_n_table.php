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
        Schema::create('DVH_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table -> string('dvhMaHD',255)->unique();
            $table -> bigInteger('dvhMaKH') -> references('id') -> on('DVH_KHACH_HANG');
            $table -> date('dvhNgayHD');
            $table -> string('dvhHoTenKH');
            $table -> string('dvhEmail');
            $table -> string('dvhDienThoai');
            $table -> string('dvhDiaChi');
            $table -> float('dvhongGT');
            $table -> tinyInteger('dvhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DVH_HOA_DON');
    }
};
