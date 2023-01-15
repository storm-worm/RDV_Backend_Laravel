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
        Schema::create('calendriers', function (Blueprint $table) {
            $table->id();
            $table->string('heures');
            $table->string('jours');
            $table->string('mois');
            $table->foreignId('service_id')
            ->constrained();
            $table->foreignId('succursale_id')
            ->constrained();
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
        Schema::dropIfExists('_calendrier');
    }
};
