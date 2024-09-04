<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // $product = new Product();
        // $product->name = $request->get('name');
        // $product->image = $request->get('image');
        // $product->description = $request->get('description');
        // $product->save();

        // $product = new Product(
        //     [
        //         'name' => $request->get('name'),
        //         'image' => $request->get('image'),
        //         'description' => $request->get('description')
        //     ]
        // );
        // $product->save();

        Product::create([
            'name' => $request->get('name'),
            'image' => $request->get('image'),
            'description' => $request->get('description')
        ]);

        return redirect()->route('dashboard');
        // return redirect('/dashboard');
    }

    public function edit($id) 
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update (Request $request, $id) 
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('dashboard');;
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    }    
    
}
