<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('book_format');
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('book_format', function (Blueprint $table) {
            $table->foreignId('book_id');
            $table->foreignId('format_id');
        });

        Schema::enableForeignKeyConstraints();
    }
};
