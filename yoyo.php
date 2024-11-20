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


        public function depot_commercial_client(Request $request, $id){
        $roles=Role::all();
        $tontine=Tontine::all();
        $user=User::find(auth()->user()->id);
        $association=$user->associations;
        $agence=$user->agences;
        // $soldes=Solde::all();
        $membres=User::where('role_id', 4)->where('association_id', $user->com_association_id)->where('mem_agence_id', $user->com_agence_id)->where('mem_tontine_id', $tontine[0]->id)->get();

        $soldes=Solde::find($id);
        $montant=$request->input('montant');

        Transaction::create([
            'solde_id'=>$soldes->id,
            'type'=>'depot',
            'montant'=>$montant,
            'tontine_id'=>$request->tontine_id,
            'commercial_id'=>$user->id,
        ]);

        $soldes->solde += $montant;
        $soldes->save();


//         $transaction=Transaction::create([
//             'type'=>'depot',
//             'user_id'=>$membres[0]->id,
//             'tontine_id'=>$request->tontine_id,
//             'commercial_id'=>$user->id,
//             'montant'=>$request->montant,
//         ]);
// for ($i=0; $i < $soldes->user_id ; $i++) {
//     if ($soldes->user_id == $membres->id) {
//         # code...
//         Solde::create([
//             'user_id'=>$membres[0]->id,

//                 # code...

//             'solde'=>$transaction->montant,
//         ]);
//     }


        return view('commercial.transaction.depot', compact('roles', 'tontine', 't', 'membres'));
    }


    https://gitlab.com/tca6832443/agence
