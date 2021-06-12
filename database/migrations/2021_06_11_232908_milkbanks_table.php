<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MilkbanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milkbanks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cep', 8);
            $table->string('address');
            $table->string('number', 10);
            $table->string('complement');
            $table->string('contact', 11);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('milkbanks');
    }
}
