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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('departing_station',50);
            $table->string('arriving_station',50);
            $table->time('departing_time', precision: 0);
            $table->time('arriving_time', precision: 0);
            $table->biginteger('train_code');
            $table->tinyinteger('carriages');
            $table->boolean('in_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
