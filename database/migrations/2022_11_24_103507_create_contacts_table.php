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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255);
            $table->boolean('gender')->nullable(false);
            $table->string('email',255)->nullable(false);
            $table->char('postcode',8)->nullable(false);
            $table->string('address',255)->nullable(false);
            $table->string('building_name',255)->nullable();
            $table->text('opinion')->nullable(false);
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
        Schema::dropIfExists('contacts');
    }
};
