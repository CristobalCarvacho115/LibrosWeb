<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('titulo',30);
            $table->string('autor',30);
            $table->tinyInteger('genero_id');
            $table->integer('editorial_id');
            $table->integer('stock');
            $table->integer('precio');
            $table->timestamps();
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->foreign('editorial_id')->references('id')->on('editoriales');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
        Schema::table('libros', function (Blueprint $table) {
        $table->dropSoftDeletes();
        });
    }
};
