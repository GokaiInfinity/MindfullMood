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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('username')->nullable();
            $table->string('pfp')->nullable();
            $table->text('content');
            $table->datetime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('date_modified')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('mood')->nullable();
            $table->string('tags')->nullable();
            $table->text('attachments')->nullable();
            $table->boolean('deleted')->default(false);
            $table->integer('version')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
