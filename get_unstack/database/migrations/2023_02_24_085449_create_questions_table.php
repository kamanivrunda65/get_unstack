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
        Schema::create('questions', function (Blueprint $table) {
            $table->id('question_id');
            // $table->unSignedBigInteger('id');
            // $table->foreign('id')->references('id')->on('users');
            $table->text('question',200)->unique();
            $table->text('tags',50);
            $table->string('category',50);
            $table->text('discription',500);
            $table->enum('permit',["Y","N"]);
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
        Schema::dropIfExists('questions');
    }
};
