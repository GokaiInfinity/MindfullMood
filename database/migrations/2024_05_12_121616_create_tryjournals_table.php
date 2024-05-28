<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tryjournals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->datetime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('date_modified')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('mood')->nullable();
            $table->string('tags')->nullable();
            $table->string('location')->nullable();
            $table->string('weather')->nullable();
            $table->text('attachments')->nullable();
            $table->boolean('deleted')->default(false);
            $table->integer('version')->default(1);
            $table->string('font_color')->nullable();
            $table->enum('font_format', ['normal', 'italic', 'bold'])->default('normal');
            $table->enum('font_family', ['Arial', 'Calibri', 'Comic Sans MS', 'Courier New', 'Georgia', 'Tahoma', 'Times New Roman', 'Verdana'])->default('Arial');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tryjournals');
    }
};
