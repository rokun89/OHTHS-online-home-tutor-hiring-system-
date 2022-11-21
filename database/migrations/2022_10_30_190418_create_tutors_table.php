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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->string('images');
            $table->string('name');
            $table->string('email');
            $table->text('login_pass');
            $table->string('contact');
            $table->text('address');
            $table->text('n_id');
            $table->string('subject');
            $table->string('salary');
            $table->string('occupation')->nullable();
            $table->text('description')->nullable();
            
            $table->string('status')->default('active');
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
        Schema::dropIfExists('tutors');
    }
};
