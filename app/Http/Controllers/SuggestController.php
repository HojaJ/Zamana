<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Suggest;
use Illuminate\Http\Request;

class SuggestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggests = Suggest::all();
        return view('suggest.index', compact('suggests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggest.create');
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
            $suggest = Suggest::create([
                'title_tk' => $request->title_tk,
                'content_tk' => $request->content_tk,
                'title_ru' => $request->title_ru,
                'content_ru' => $request->content_en,
                'title_en' => $request->title_en,
                'content_en' => $request->content_en,
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $suggest->image = $path;
                $suggest->save();
            }
            return redirect()->route('admin.suggest.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function show(Suggest $suggest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function edit(Suggest $suggest)
    {
        return view('suggest.edit', compact('suggest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggest $suggest)
    {
        try {
            $suggest->update([
                'title_tk' => $request->title_tk,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'content_tk' => $request->content_tk,
                'content_ru' => $request->content_ru,
                'content_en' => $request->content_en,
            ]);

            if($request->has('image')) {
                File::delete($suggest->image);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $suggest->image = $path;
                $suggest->save();
            }
            return redirect()->route('admin.suggest.index')->withSuccess('Üstünlikli Uýgedildi');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suggest  $suggest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suggest $suggest)
    {
        try{
            File::delete($suggest->image);
            $suggest->delete();
            return redirect()->route('admin.suggest.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.suggest.index')->withErrors($e->getMessage());
        }
    }
}
