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
        Schema::create('testimonial_homes', function (Blueprint $table) {
            $table->id();
            $table->string('testimonial_home_profile')->nullable();
            $table->string('testimonial_home_name')->nullable();
            $table->string('testimonial_home_jobtitle')->nullable();
            $table->string('testimonial_home_caption')->nullable();
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
        Schema::dropIfExists('testimonial_homes');
    }
};
