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
            $table->text('vazirliklar');
            $table->text('filial');
            $table->string('manzil');
            $table->varchar('veb_sayt');
            $table->varchar('telefon');
            $table->text('kimga');
            $table->varchar('email');
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
