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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('journal_id')->nullable();
            $table->string('journal_created_by')->nullable();
            $table->string('journal_type')->nullable(); // editorial_team=Contacts, Indexing, publisher,
            $table->string('journal_value')->nullable();//name of entity or name of contact
            $table->string('journal_group')->nullable();//group for contacts
            $table->string('journal_link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
