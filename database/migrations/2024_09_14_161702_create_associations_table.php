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
        Schema::create('associations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('association_journal')->nullable(); //This is the ID used for query
            $table->string('association_source')->nullable(); //entity or user or org
            $table->string('association_id')->nullable(); //associated ID
            $table->string('association_role')->nullable(); //Reference / Editor ...

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associations');
    }
};
