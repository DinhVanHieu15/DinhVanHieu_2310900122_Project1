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
        Schema::create('DVH_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('dvhHoaDonID') -> references('id') -> on('DVH_HOA_DON');
            $table -> bigInteger('dvhSanPhamID') -> references('id') -> on('DVH_SAN_PHAM');
            $table -> integer('dvhSLMua');
            $table -> float('dvhDonGiaMua');
            $table -> float('dvhThanhTien');
            $table -> tinyInteger('dvhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DVH_CT_HOA_DON');
    }
};
