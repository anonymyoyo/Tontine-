<?php

use App\Models\Agence;
use App\Models\Association;
use App\Models\Commercial;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Agence::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Commercial::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Association::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
