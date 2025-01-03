<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\Solde;
use App\Models\Tontine;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $tontine = Tontine::all();
        $category = Category::all();
        // $membre = Solde::all();

        // return $membre;
        return view('users.home', compact('tontine', 'category'));
    }

    public function about()
    {
        return view('users.about');
    }

    public function association()
    {
        return view('users.association');
    }

    public function contact()
    {
        return view('users.contact');
    }

    public function service()
    {
        return view('users.service');
    }

    public function blog()
    {
        return view('users.blog');
    }

    public function tontines()
    {
        $tontine = Tontine::all();
        return view('users.tontine', compact('tontine'));
    }

    public function catalogue()
    {
        // $membre = User::where('role_id', 4)->get();
        $tontine = Tontine::all();
        $produit = Produit::all();
        $categorie = Category::all();
        $totalProduits = Produit::Count();
        // return $produit;
        return view('users.catalogue', compact('produit', 'categorie', 'totalProduits'));
    }

    public function category($id)
    {
        $categorie = Category::find($id);
        $category = Category::all();
        $produit = Produit::where('category_id', $categorie->id)->get();
        $totalProduits = $produit->Count();

        // return $totalProduits;
        return view('users.category', compact('produit', 'categorie', 'totalProduits', 'category'));
    }
}
