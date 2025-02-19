<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',150);
            $table->string('email','50')->nullable();
            $table->string('phone','25')->nullable();
            $table->string('subject','50')->nullable();
            $table->string('message',)->nullable();
            $table->string('ip','150')->nullable()->default('False');
            $table->string('note','150')->nullable();
            $table->string('status',5)->nullable()->default('New');

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
        Schema::dropIfExists('messages');
    }
}
