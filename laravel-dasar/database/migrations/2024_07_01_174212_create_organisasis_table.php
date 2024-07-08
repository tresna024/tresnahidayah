<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('restrict');
            $table->string('nama_ketua');
            $table->string('img_ketua')->nullable();
            $table->string('nama_wakil');
            $table->string('img_wakil')->nullable();
            $table->string('ketua_ikpas');
            $table->string('wakil_ketua');
            $table->string('sekretaris');
            $table->string('bendahara');
            $table->string('bidang_kesehatan');
            $table->string('bidang_kerohania');
            $table->string('bidang_senior');
            $table->string('bidang_keamanan');
            $table->string('bidang_infokom');
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
        Schema::dropIfExists('organisasis');
    }
}
