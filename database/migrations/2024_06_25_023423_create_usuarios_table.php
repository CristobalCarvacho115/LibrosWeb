<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('email',50)->unique();
            $table->string('password');
            $table->string('nombre',50);
            $table->timestamp('ultimo_login')->nullable();
            $table->tinyInteger('rol_id');
            $table->timestamps();
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
