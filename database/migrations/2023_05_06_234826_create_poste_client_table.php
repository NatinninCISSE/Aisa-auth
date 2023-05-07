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
        Schema::create('poste_client', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('poste_id');
            $table->timestamps();
        
            $table->primary(['client_id', 'poste_id']);
        
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('poste_id')->references('id')->on('postes')->onDelete('cascade');
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
        Schema::dropIfExists('poste_client');
    }
};
