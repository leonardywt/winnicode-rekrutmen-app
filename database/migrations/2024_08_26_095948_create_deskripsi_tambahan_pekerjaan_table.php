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
        Schema::create('deskripsi_tambahan_pekerjaan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_perusahaan');
            $table->unsignedBigInteger('id_pekerjaan');
            $table->string('deskripsi', 500);
            $table->string('responsibilities', 500);
            $table->string('whoyouare', 500);
            $table->string('nicetohaves', 500);
            $table->string('benefits', 500);
            $table->timestamps();
            $table->softDeletes();

            $table->primary(['id_perusahaan', 'id_pekerjaan']);

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
        Schema::dropIfExists('deskripsi_tambahan_pekerjaan');
    }
};
