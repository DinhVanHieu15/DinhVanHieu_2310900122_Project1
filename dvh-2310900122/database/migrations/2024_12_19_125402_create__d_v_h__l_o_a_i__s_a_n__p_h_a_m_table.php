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
        Schema::create('DVH_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table -> string('dvhMaLoai',255)->unique();
            $table -> string('dvhTenLoai',255);
            $table -> tinyInteger('dvhTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DVH_LOAI_SAN_PHAM');
    }
};
