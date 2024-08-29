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
        Schema::table('tipe_pekerjaan', function (Blueprint $table) {
            $table->enum('tipe', ['Full Time', 'Part Time', 'Remote', 'Internship', 'Contract']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipe_pekerjaan', function (Blueprint $table) {
            $table->dropColumn('tipe');
        });
    }
};
