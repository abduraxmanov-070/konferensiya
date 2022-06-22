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
        Schema::create('konferensiyas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->text('vazirliklar');
            $table->text('filial');
            $table->string('manzil');
            $table->string('veb_sayt');
            $table->string('telefon');
            $table->text('kimga');
            $table->string('email');
            $table->longText('shot_raqam');
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
        Schema::dropIfExists('konferensiyas');
    }
};
