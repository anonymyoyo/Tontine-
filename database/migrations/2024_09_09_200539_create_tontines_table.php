<?php

use App\Models\Association;
use App\Models\Etat;
use App\Models\Image;
use App\Models\Membre;
use App\Models\User;
use App\Models\Versement;
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
        Schema::create('tontines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('montant_total');
            $table->string('reglement');
            $table->string('nbre_membre');
            $table->string('prix');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontines');
    }
};
