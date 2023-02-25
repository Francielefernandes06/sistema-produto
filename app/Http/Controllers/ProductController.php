<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{


    public function index()
    {
        $user = auth()->user();
        $products = Product::where('user_id', $user->id)->get();

        return view('produtos.products_index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required|image|max:2048',
        ]);

        // Tratamento da Imagem
        
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images/products'), $imageName);

        $validatedData['image'] = $imageName;

        $user = Auth::user(); // Recupera o usuário autenticado
        $product = new Product();
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        // if($request->hasFile('image') && $request->file('image')->isValid()) {
        //     $requestImage = $request->image;
        //     $extension = $requestImage->extension();
        //     $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        //     $requestImage->move(public_path('images/products'), $imageName);
        //     $product->image = $imageName;
        // }

        $product->image = $imageName;
        $product->user_id = $user->id; // Define o usuário como dono do produto
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found');
        }

        // check if the user is the owner of the product
        if (Auth::user()->id != $product->user_id) {
            return redirect()->route('products.index')
                ->with('error', 'You are not authorized to edit this product');
        }

        return view('produtos.product_edit', compact('product'));
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found');
        }

        // check if the user is the owner of the product
        if (Auth::user()->id != $product->user_id) {
            return redirect()->route('products.index')
                ->with('error', 'You are not authorized to edit this product');
        }

        // validate the input data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // update the product data
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        // handle the product image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/images', $filename);
            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')
                ->with('error', 'Product not found');
        }

        // check if the user is the owner of the product
        if (Auth::user()->id != $product->user_id) {
            return redirect()->route('products.index')
                ->with('error', 'You are not authorized to delete this product');
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
