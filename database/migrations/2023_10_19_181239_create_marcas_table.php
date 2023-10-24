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
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });

        Schema::table('itens', function (Blueprint $table) {
            $table->unsignedBigInteger('marca_id')->nullable()->after('preco');

            $table->foreign('marca_id')->references('id')->on('marcas');
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
            $table->dropForeign('itens_marca_id_foreign');
            $table->dropColumn('marca_id');
        });

        Schema::dropIfExists('marcas');
    }
};
