<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLpjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lpjs', function (Blueprint $table) {
            $table->id();
            $table->enum('namaorganisasi', ['HIZBUL WATHAN', 'IKATAN MAHASISWA MUHAMMADIYAH (IMM)', 'UKM KSR-PMI', 'UKM PERS', 'UKM PIK-M', 'UKM UMB ENGLISH CLUB', 'UKM OLAHRAGA', 'UKM SENI Rufaidah', 'UKM Paduan Suara La Ode Voice', 'UKM AGAMA', 'TAPAK SUCI']);
            $table->string('kegiatan');
            $table->string('lpj');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lpjs');
    }
}
