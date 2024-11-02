<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('writers', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('photo')->default('img/defaultWriter.jpg');
            $table->timestamps();
        });

        Schema::table('articles', function (Blueprint $table){
            $table->foreignId('writer_id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('writers');
        Schema::table('articles', function (Blueprint $table){
            $table->dropForeign(['writer_id']);
            $table->dropColumn('writer_id');
        });
    }
};
