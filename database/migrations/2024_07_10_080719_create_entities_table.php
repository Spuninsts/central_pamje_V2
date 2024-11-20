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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ent_created_by')->nullable();
            $table->string('ent_id')->nullable(); // indexes or publisher ID's
            $table->string('ent_type')->nullable(); // indexes or publisher
            $table->string('ent_name')->nullable(); // name
            $table->string('ent_acro')->nullable(); // acronyum
            $table->string('ent_status')->nullable(); // status
            $table->longText('ent_description')->nullable(); // entity description
            $table->text('ent_url')->nullable(); // entity external site
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
