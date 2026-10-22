<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        // Menampilkan 3 data per halaman
        $recipes = Recipe::paginate(3); 
        return view('recipes.index', compact('recipes'));
    }

    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }
}