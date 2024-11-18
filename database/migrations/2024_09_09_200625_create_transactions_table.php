<?php

use App\Models\Solde;
use App\Models\Tontine;
use App\Models\User;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignIdFor(Solde::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Tontine::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('commercial_id')->nullable();
            $table->string('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
