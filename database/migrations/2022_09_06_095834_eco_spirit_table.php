<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eco_spirit', function (Blueprint $table) {
            $table->id();
            $table->string('eco_spirit_icon');
            $table->string('eco_spirit_judul');
            $table->text('eco_spirit_deskripsi');
            $table->string('eco_spirit_gambar');
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
        //
    }
};
