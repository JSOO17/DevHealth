<?php

namespace DevHealth\Http\Controllers;

use Illuminate\Http\Request;

use DevHealth\Categorie;

class CategorieController extends Controller
{
    public function show(Categorie $categorie)
    {
    	return view('category.show', compact('categorie'));
    }
}
