<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('product.show', ['product' => $product]);
    }

    public function update(Request $request, $id){
        if ($request->isMethod('post')) {
            Product::where('id', '=', $id)->update(
                /*
                 * [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'category_id' => $request->category_id,
                ]
                 */
                $request->except('_token')
            );
            return redirect('/products');
        } else {
            $product = Product::where('id', '=', $id)->first();
            $categories = Category::all();
            return view('product.update', ['product' => $product, 'categories' => $categories]);
        }
    }

    public function delete($id){
            Product::where('id', '=', $id)->delete();
        return redirect('/products');
    }
    public  function new(Request $request){
        if ( $request->isMethod('post')) {
            $product = new Product($request->except('_token'));
            $product->save();


            return redirect('/products');
        } else {
            $categories = Category::all();
            return view('product.new', ['categories' => $categories]);
        }
    }
}
