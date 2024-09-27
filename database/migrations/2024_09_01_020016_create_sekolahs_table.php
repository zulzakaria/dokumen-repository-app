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
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('namaSekolah');
            $table->string('npsn');
            $table->string('emailSekolah');
            $table->string('namaKepalaSekolah');
            $table->string('telpKepalaSekolah');
            $table->string('namaWakasekKurikulum');
            $table->string('telpWakasekKurikulum');
            $table->string('namaBendahara');
            $table->string('telpBendahara');
            $table->string('namaOperator');
            $table->string('telpOperator');
            $table->enum('jenjang', ['SMA','SMK','SLB']);
            $table->enum('kabupaten', ['Kota Gorontalo','Kab. Gorontalo','Kab. Bone Bolango','Kab. Gorontalo Utara','Kab. Boalemo','Kab. Pohuwato']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
