<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('hobbies')->index();
            $table->date('invoeren_op');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers_table');
    }
};
