<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function getCategoryAll(Request $request)
    {
        $categoryAll = Categoria::get();

        return response()->json($categoryAll);
    }

    public function getCategoryOnly($id, Request $request)
    {
        $categoryOnly = Categoria::findOrFail($id);

        return response()->json($categoryOnly);
    }
}
