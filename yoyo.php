<!-- Agence -->

Schema::disableForeignKeyConstraints();
        Schema::create('gerants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('naissance');
            $table->foreignIdFor(Etat::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Role::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Tontine::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });


<!-- commercial -->

Schema::disableForeignKeyConstraints();
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('naissance');
            $table->foreignIdFor(Etat::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(User::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Role::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Tontine::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            // $table->foreignIdFor(Image::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            // $table->foreignIdFor(Contribution::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            // $table->foreignIdFor(Versement::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            // $table->foreignIdFor(Historique::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });

        <!-- Membre -->

        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('ville');
            $table->string('pays');
            $table->string('identification');
            $table->foreignIdFor(Role::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            // $table->foreignIdFor(Image::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignIdFor(Etat::class)->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
