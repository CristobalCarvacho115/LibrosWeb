<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre',30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('editoriales');
        Schema::table('editoriales', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
