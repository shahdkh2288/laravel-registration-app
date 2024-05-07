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
        Schema::create('registeration', function (Blueprint $table) {
            $table->id();
        
            $table->string('name', 50)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('password', 50)->nullable();

            $table->string('email', 100)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('address', 100)->nullable();
            $table->date('birthday')->nullable();
            $table->string('image', 100)->nullable();
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
        Schema::dropIfExists('registeration');
    }
};
