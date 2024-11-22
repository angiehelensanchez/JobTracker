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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_id');
            $table->string('offer_name');
            $table->enum('attendance', ['On-site','Hybrid',"Remote"]);
            $table->string('salaryRange');
            $table->string('description');
            $table->unsignedInteger('jobportal_id');
            $table->unsignedInteger('state_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
