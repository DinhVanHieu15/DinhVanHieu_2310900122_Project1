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
        Schema::create('DVH_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table -> string('dvhMaSP',255)->unique();
            $table -> string('dvhTenSP',255);
            $table -> string('dvhHinhAnh',255);
            $table -> integer('dvhSoLuong');
            $table -> float('dvhDonGia');
            $table -> bigInteger('dvhMaLoai')->references('id')-> on('DVH_LOAI_SAN_PHAM');
            $table -> tinyInteger('dvhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DVH_SAN_PHAM');
    }
};
