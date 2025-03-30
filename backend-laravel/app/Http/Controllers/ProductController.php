<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; // Import model Product

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Ambil semua data produk
        return response()->json($products); // Kembalikan dalam bentuk JSON
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return response()->json($product);
    }
}
