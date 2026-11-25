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
        Schema::create('deveploment_applicants', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('deveploment_id');
            $table->foreign('deveploment_id')->references('id')->on('deveploments');

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('status', ['pending','approved', 'rejected']);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deveploment_applicants');
    }
};
