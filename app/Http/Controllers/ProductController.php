<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Quantity;
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

    public function index(Request $request)
    {
        return Inertia::render('Product', [
            'brands_filter' => Product::select('brand')->distinct()->get()->map(function($brand) {
                return [
                    'id' => $brand->brand,
                    'category_name' => $brand->brand,
                ];
            }),
            'categories_filter' => Category::get()->map(function($category) {
                return [
                    'id'    => $category->id,
                    'category_name' => $category->category_name,
                ];
            }),
            'sizes_filter' => Quantity::select('size')->distinct()->get()->map(function($size) {
                return [
                    'id'    => $size->size,
                    'category_name' => $size->size
                ];
            }),
            'colors_filter' => Quantity::select('color')->distinct()->get()->map(function($color) {
                return [
                    'id'    => $color->color,
                    'category_name' => $color->color
                ];
            }),
            'products'  => Product::where('active', true)->get()->map(function ($product) use ($request) {
                if ($request) {
                    if (strpos($request->category, '*') !== false) {
                        // split the filter by * 
                        // add the different filters into an array
                        // loop through array adding new filters
                    }
                    // basic filter 
                    // $product->where()->get();
                }

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

    // @todo need to work on
    public function show(Request $request)
    {
        dd($request);
        

        return Inertia::render('ProductPage', [
            'product' => Product::query()->where('id', $request->id)->get()->map(function($product) {
                return [
                    'id'    => $product->id,
                    'title' => $product->title,
                    'image' => $product->image,
                    'description'   => $product->description,
                    'price' => $product->unit_price,
                    'category' => $product->whereHas('category')->get(),
                    
                ];
            }),
        ]);
    }
}
