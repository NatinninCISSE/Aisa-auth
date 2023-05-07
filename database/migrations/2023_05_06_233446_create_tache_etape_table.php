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
        Schema::create('tache_etape', function (Blueprint $table) {
            $table->unsignedBigInteger('etape_id');
            $table->unsignedBigInteger('tache_id');
            $table->foreign('etape_id')->references('id')->on('etapes')->onDelete('cascade');
            $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');
            $table->primary(['etape_id', 'tache_id']);
            $table->id();
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
        Schema::dropIfExists('tache_etape');
    }
};
