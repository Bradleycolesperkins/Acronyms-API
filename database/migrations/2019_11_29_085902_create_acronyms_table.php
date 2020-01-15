<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcronymsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acronyms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->unsigned()->index();        // LINK TO SNAPSHOT CASE TEMPLATES
            $table->foreign('user_id')->references('id')->on('users');

            $table->char('acronym', 255)->index();
            $table->longText('expansion'); // answer to the acronym
            $table->longText('definition'); // details fo the acronym
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
        Schema::dropIfExists('acronyms');
    }
}
