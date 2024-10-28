<?php

use App\Models\Association;
use App\Models\Role;
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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('ville');
            $table->string('pays');
            $table->string('identification');
            $table->string('image');
            $table->foreignIdFor(Role::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Tontine::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Association::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
