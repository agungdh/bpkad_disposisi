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
        Schema::create('jabatans', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->unsignedBigInteger('bidang_id')->nullable();
            $table->smallInteger('is_kepala_badan')->default(0);
            $table->smallInteger('is_sekretaris')->default(0);
            $table->smallInteger('is_kepala_bidang')->default(0);
            $table->smallInteger('is_kepala_sub_bidang')->default(0);
            $table->timestamps();

            $table->foreign('bidang_id')->references('id')->on('bidangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatans');
    }
};
