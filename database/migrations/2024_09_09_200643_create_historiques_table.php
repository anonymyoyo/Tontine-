<?php

use App\Models\Agence;
use App\Models\Contribution;
use App\Models\Membre;
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
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Contribution::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->date('date_action');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiques');
    }
};
