<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            Category::create([
                'name_tk' => ucfirst($request->name_tk),
                'name_ru' => ucfirst($request->name_ru),
                'name_en' => ucfirst($request->name_en),
                'slug' => $request->slug,
            ]);
            return redirect()->route('admin.category.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        try {
            $category->update([
                'name_tk' => ucfirst($request->name_tk),
                'name_ru' => ucfirst($request->name_ru),
                'name_en' => ucfirst($request->name_en),
                'slug' => $request->slug,
            ]);
            return redirect()->route('admin.category.index')->withSuccess('Üstünlikli Uýgedildi');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        try{
            $category->delete();
            return redirect()->route('admin.category.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.category.index')->withErrors($e->getMessage());
        }
    }
}
