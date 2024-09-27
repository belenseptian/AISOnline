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
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mmsi');
            $table->double('lon');
            $table->double('lat');
            $table->double('sog');
            $table->double('cog');
            $table->integer('heading');
            $table->integer('time');
            $table->integer('imo');
            $table->string('eta', length: 100);
            $table->string('destination', length: 100);
            $table->string('name', length: 100);
            $table->double('draught');
            $table->integer('type_no');
            $table->string('type_string', length: 100);
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
        Schema::dropIfExists('logs');
    }
};
