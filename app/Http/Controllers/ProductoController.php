<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductoController extends Controller
{
    public function getProducstAll(Request $request)
    {
        $productsAll = Producto::get();
        
        return response()->json($productsAll);
    }

    public function getProductOnly($id, Request $request)
    {
        $productOnly = Producto::findOrFail($id);

        return response()->json($productOnly);
    }

    public function getProductPaginate(Request $request)
    {
        $productPaginate = Producto::paginate(10);
        
        return response()->json($productPaginate->items());
    }

    public function getProductsCategory(Request $request)
    {
        $productsCategory = Producto::join('categorias' ,'categorias.id', '=', 'productos.idcategoria')
                                    ->select('productos.*', 'categorias.categoria')
                                    ->get();

        //dd($productsCategory->toArray());

        return response()->json($productsCategory);
    }

    public function getProductsByCategory($idcategoria,Request $request)
    {
        $productsByCategory = Producto::where('productos.idcategoria', '=', $idcategoria)
                                    ->get();

        return response()->json($productsByCategory);
    }
}
