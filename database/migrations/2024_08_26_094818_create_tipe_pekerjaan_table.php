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
        Schema::create('tipe_pekerjaan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_perusahaan');
            $table->unsignedBigInteger('id_pekerjaan');
            $table->enum('tipe', ['Full Time', 'Part Time', 'Remote', 'Internship', 'Contract']);
            $table->timestamps();

            $table->primary(['id_perusahaan', 'id_pekerjaan', 'tipe']);

            $table->foreign('id_perusahaan')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_pekerjaan')
                ->references('id')
                ->on('pekerjaan')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipe_pekerjaan');
    }
};
