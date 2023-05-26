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
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id();
            $table->string('numero_police');
            $table->string('nom_prenom');
            $table->string('contact1');
            $table->string('contact2')->nullable();
            $table->string('lieu')->nullable();
            $table->date('date_sinistre');
            $table->longText('details');
            $table->unsignedBigInteger('assurance_id');
            $table->unsignedBigInteger('nature_intervention_id');
            $table->foreign('assurance_id')->references('id')->on('assurances');
            $table->foreign('nature_intervention_id')->references('id')->on('nature_interventions');
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
        Schema::dropIfExists('sinistres');
    }
};
