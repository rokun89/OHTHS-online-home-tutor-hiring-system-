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
        Schema::create('hiretutors', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->foreignId('tutor_id');
            $table->foreignId('parents_id');
            $table->string('class');
            $table->string('subject');
            $table->string('parent_contact');
            $table->string('parent_email');
            $table->string('address');
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
        Schema::dropIfExists('hiretutors');
    }
};
