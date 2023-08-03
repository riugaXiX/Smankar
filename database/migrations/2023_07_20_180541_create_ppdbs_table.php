<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string("nmSiswa");
            $table->string("NIS");
            $table->string("almtSiswa");
            $table->string("nmrSiswa");
            $table->string("email");
            $table->integer("inggris");
            $table->integer("indonesia");
            $table->integer("matematika");
            $table->integer("isterima")->default(0);
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
        Schema::dropIfExists('ppdbs');
    }
}
