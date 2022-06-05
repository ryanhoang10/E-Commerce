<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // $path = $request->image->store('public/products');

        Product::create([
            'category_id'   => $request->category_id,
            'title'         => $request->title,
            'image'         => 'test',
            'description'   => $request->description,
            'unit_price'    => $request->unit_price,
            'sale_price'    => $request->sale_price,
            'active'        => $request->active,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        // return redirect()->route('pizza.index')->with('message', 'Pizza added successfully');
    }

    public function index()
    {
        return Inertia::render('Index', [
            'products'  => Product::where('active', true)->get()->map(function ($product) {
                return [
                    'id'    => $product->id,
                    'title' => $product->title,
                    'image' => $product->image,
                    'description'   => $product->description,
                    'price' => $product->unit_price,
                ];
            }),
        ]);
    }
}
