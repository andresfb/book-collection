<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('format_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('service_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->text('location');
            $table->string('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('editions');
    }
};
