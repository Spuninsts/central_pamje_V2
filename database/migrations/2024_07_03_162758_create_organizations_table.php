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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('org_created_by')->nullable();
            $table->string('org_id')->nullable();
            $table->string('org_status')->nullable(); // active,inactive
            $table->string('org_title')->nullable(); // organization title
            $table->longText('org_description')->nullable(); // organization description
            $table->text('org_image_path')->nullable(); // for the image
            $table->text('org_url')->nullable();//this can go to a page or third party site.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
