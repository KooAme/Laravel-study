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
    public function up() //db저ㅇ의를 추기, 변경
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', '100');
            $table->integer('author_id');
            $table->integer('publisher_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //up메서드의 내용을 원복하는 처리
    {
        Schema::dropIfExists('books');
    }
};
