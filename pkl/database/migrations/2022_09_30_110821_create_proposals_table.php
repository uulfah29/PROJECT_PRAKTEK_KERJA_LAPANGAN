<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->enum('nmaorganisasi', ['HIZBUL WATHAN', 'IKATAN MAHASISWA MUHAMMADIYAH (IMM)', 'UKM KSR-PMI', 'UKM AGAMA', 'UKM PERS', 'UKM PIK-M', 'UKM UMB ENGLISH CLUB', 'UKM OLAHRAGA', 'UKM SENI Rufaidah', 'UKM Paduan Suara La Ode Voice', 'TAPAK SUCI']);
            $table->string('kegiatan');
            $table->string('proposal');
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
        Schema::dropIfExists('proposals');
    }
}
