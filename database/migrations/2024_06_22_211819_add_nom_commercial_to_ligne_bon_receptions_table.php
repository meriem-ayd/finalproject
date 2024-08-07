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
            // Ajoutez la colonne nomCommercial comme nullable
            $table->string('nomCommercial')->after('id_dci');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ligne_bon_receptions', function (Blueprint $table) {
            //
        });
    }
};
