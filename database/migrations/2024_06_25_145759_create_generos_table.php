<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('generos', function (Blueprint $table) {
            $table->tinyInteger('id')->autoIncrement();
            $table->string('nombre',20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('generos');
        Schema::table('generos', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
