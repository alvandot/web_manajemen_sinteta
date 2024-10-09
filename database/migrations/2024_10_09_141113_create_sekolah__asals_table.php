<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolah__asals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah')->required();
            $table->string('alamat')->nullable();
            $table->foreignId('kelas_id')->constrained('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah__asals');
    }
};
