<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations */
    public function up(): void
    {
        Schema::create('complements', function (Blueprint $table) {
            $table->id('complement_id');
            $table->string('name')->require()->unique();
            $table->string('slug')->require()->unique();
            $table->longText('items')->require();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /* Reverse the migrations. */
    public function down(): void
    {
        Schema::dropIfExists('complements');
    }
};
