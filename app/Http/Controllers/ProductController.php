<?php

namespace App\Http\Controllers;

use App\Models\Product\PhysicalProduct;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $physicalProductData = [
            'name' => 'Физические товар 1',
            'description' => 'Описание физического товара',
            'price' => 25,
            'weight' => 12,
        ];

        $digitalProductData = [
            'name' => 'Цифровой товар 1',
            'description' => 'Описание цифрового товара',
            'price' => 25,
            'link' => 'https://some-link.com',
        ];

//        $physicalProduct = new Product();


        return to_route('products.index');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return to_route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index');
    }
}
