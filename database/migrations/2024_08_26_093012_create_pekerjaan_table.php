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
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_perusahaan');
            $table->string('nama');
            $table->decimal('rentang_gaji_awal',15,2);
            $table->decimal('rentang_gaji_akhir',15,2);
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_perusahaan')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaan');
    }
};
