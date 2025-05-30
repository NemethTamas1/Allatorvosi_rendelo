<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('working', function (Blueprint $table) {
            $table->id();

            //"clinic_id" mező
            $table->unsignedBigInteger("clinic_id");
            $table->foreign("clinic_id")->references("id")->on("clinics");

            //"worker_id" mező
            $table->unsignedBigInteger("worker_id");
            $table->foreign("worker_id")->references("id")->on("workers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dolgozik');
    }
};
