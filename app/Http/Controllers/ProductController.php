<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'ASC')->get();
        return view('product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = Product::create([
                'title_tk' => ucfirst($request->name_tk),
                'title_ru' => ucfirst($request->name_ru),
                'title_en' => ucfirst($request->name_en),
                'category_id' => $request->category,
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $product->image = $path;
                $product->save();
            }
            return redirect()->route('admin.product.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        try {
            $product->update([
                'title_tk' => ucfirst($request->name_tk),
                'title_ru' => ucfirst($request->name_ru),
                'title_en' => ucfirst($request->name_en),
                'category_id' => $request->category,
            ]);

            if($request->has('image')) {
                File::delete($product->image);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $product->image = $path;
                $product->save();
            }
            return redirect()->route('admin.product.index')->withSuccess('Üstünlikli üýtgedildi.');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        try{
            File::delete($product->image);
            $product->delete();
            return redirect()->route('admin.product.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.product.index')->withErrors($e->getMessage());
        }
    }
}
