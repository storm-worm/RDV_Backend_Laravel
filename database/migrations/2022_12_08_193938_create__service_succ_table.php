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
        Schema::create('_service_succ', function (Blueprint $table) {
            $table->foreignId("service_id")->constrained();
            $table->foreignId("seccursale_id")->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_service_succ',function (Blueprint $table){
            $table->dropForeign(["service_id","seccu_id"]);
        });
        Schema::dropIfExists('_service_succ');
    }
};
