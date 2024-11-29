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
            $table->string('company_name');
            $table->string('offer_name');
            $table->enum('attendance', ['On-site','Hybrid',"Remote"]);
            $table->string('salary_range');
            $table->string('description');
            $table->string('url');
            $table->enum('state', ['In-progress','Finished',"Paused"]);
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
