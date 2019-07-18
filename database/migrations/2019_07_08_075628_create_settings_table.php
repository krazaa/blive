<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            //$table->Increments('id');
            $table->string('company')->unique();
            $table->string('address');
            $table->string('email');
            $table->string('contact');
            $table->string('fax');
            $table->string('fb');
            $table->string('tw');
            $table->string('ig');
            $table->string('yt');
            $table->string('logo');
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
        Schema::dropIfExists('settings');
    }
}
