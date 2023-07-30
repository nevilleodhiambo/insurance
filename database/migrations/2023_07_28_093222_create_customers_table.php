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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->integer('location_id');
            $table->string('email');
            $table->string('national');
            $table->string('pno');
            $table->string('sno');
            $table->integer('cartype_id');
            $table->integer('top_id');
            $table->string('no_plate');
            $table->date('date_issued');
            $table->date('date_expire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
