<?php

namespace App\Http\Controllers;

use App\Models\Product\DigitalProduct;
use App\Models\Product\PhysicalProduct;
use App\Models\Product\Product;
use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $physicalProductData = [
            'title' => 'Физические товар 1',
            'description' => 'Описание физического товара',
            'price' => 25000,
            'weight' => 12,
        ];

        $digitalProductData = [
            'title' => 'Цифровой товар 1',
            'description' => 'Описание цифрового товара',
            'price' => 1500,
            'link' => 'https://some-link.com',
        ];

//        $product = Product::create($physicalProductData);
//        $physicalProductData['product_id'] = $product->id;
//        $typeProduct = $this->productService->createProduct(new PhysicalProduct(), $physicalProductData);

        $product = Product::create($digitalProductData);
        $digitalProductData['product_id'] = $product->id;
        $typeProduct = $this->productService->createProduct(new DigitalProduct(), $digitalProductData);

        dd($typeProduct->getAdditionalAttributes());

        return to_route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request)
    {
        return to_route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return to_route('products.index');
    }
}
