<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });

        Schema::table('itens', function (Blueprint $table) {
            $table->unsignedBigInteger('grupo_id')->nullable()->after('marca_id');

            $table->foreign('grupo_id')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itens', function(Blueprint $table){
            $table->dropForeign('itens_grupo_id_foreign');
            $table->dropColumn('grupo_id');
        });

        Schema::dropIfExists('grupos');
    }
};
