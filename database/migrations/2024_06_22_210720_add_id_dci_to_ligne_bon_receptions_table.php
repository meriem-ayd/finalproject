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
        Schema::table('ligne_bon_receptions', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dci')->nullable();

            // Establish foreign key relationship
            $table->foreign('id_dci')->references('id')->on('dci')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ligne_bon_receptions', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['id_dci']);
            // Then drop the column
            $table->dropColumn('id_dci');
        });
    }
};
