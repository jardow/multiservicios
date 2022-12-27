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
        Schema::create('acercades', function (Blueprint $table) {
            $table->id();
            $table->string('acercade',500);
            $table->string('foto1',100);
            $table->string('mision',500);
            $table->string('foto2',100);
            $table->string('vision',500);
            $table->string('foto3',100);
            $table->string('valores',500);
            $table->string('foto4',100);
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
        Schema::dropIfExists('acercades');
    }
};
