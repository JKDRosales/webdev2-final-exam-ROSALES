<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bst', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 110);
            $table->string('email');
            $table->bigInteger('contact');
            $table->date('birthdate');
            $table->string('religion');
            $table->date('bsdate');
            $table->time('bstime');
            $table->string('bslocation');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bst');
    }
}

