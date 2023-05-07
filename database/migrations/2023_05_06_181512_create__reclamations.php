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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_client')->constrained()->ondelete('cascade');
            $table->foreignId('id_administrateur')->constrained()->ondelete('cascade');
            $table->foreignId('id_dispositif')->constrained()->ondelete('cascade');
            $table->mediumtext('objet_reclamation');
            $table->mediumtext('description_reclamation');
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
        Schema::dropIfExists('reclamations');
    }
};

