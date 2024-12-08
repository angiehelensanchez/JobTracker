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
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade');
            $table->string('offer_name');
            $table->enum('attendance', ['On-site','Hybrid',"Remote"]);
            $table->string('salary_range');
            $table->string('description');
            $table->unsignedBigInteger('jobportal_id');
            $table->foreign('jobportal_id')->references('id')->on('job_portals')->onUpdate('cascade');
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
