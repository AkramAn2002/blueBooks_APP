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
        Schema::create('reception', function (Blueprint $table) {
            $table->id();
            $table->string('societe');
            $table->string('phone', 10);
            $table->string('email')->unique();
            $table->integer('nombreFacture');
            $table->integer('nombreDocumentbanquaire');
            $table->enum('action', ['create', 'update', 'delete']);
            $table->timestamps();
        });
        // table: nom du société +phone number + email + nbr de facture + nombre de documents bancaire + actions
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reception');
    }
};
