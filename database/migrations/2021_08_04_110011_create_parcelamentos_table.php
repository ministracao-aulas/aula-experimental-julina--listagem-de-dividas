<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('debito_id');
            $table->integer('parcela');
            $table->integer('total_de_parcelas');
            $table->string('valor');
            $table->datetime('competencia');

            // $table->foreign('debito_id')->references('id')->on('debitos')->onDelete('cascade');//cascade|set null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcelamentos');
    }
}
