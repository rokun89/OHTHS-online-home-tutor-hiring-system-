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
        Schema::create('tutions', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->foreignId('tutor_id');
            $table->foreignId('class_id');
            $table->foreignId('subject_id');
            $table->string('subject_name');
            $table->string('location');
            $table->integer('salary');
            $table->integer('weekend_days');
            $table->string('status')->default('pending');

            
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
        Schema::dropIfExists('tution');
    }
};
