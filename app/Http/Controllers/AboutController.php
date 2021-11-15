<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function aboutus()
    {
        $about = About::where('id', 1)->first();
        return view('about.index', compact('about'));
    }

    public function address()
    {
        $about = About::where('id', 2)->first();
        return view('about.index', compact('about'));
    }
    
    public function email()
    {
        $about = About::where('id', 3)->first();
        return view('about.index', compact('about'));
    }

    public function tell()
    {
        $about = About::where('id', 4)->first();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
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
            $about = About::create([
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
                $about->image = $path;
                $about->save();
            }
            return redirect()->route('admin.about.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        try {
            $about->update([
                'title_tk' => $request->title_tk,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'content_tk' => $request->content_tk,
                'content_ru' => $request->content_ru,
                'content_en' => $request->content_en,
            ]);

            if($request->has('image')) {
                File::delete($about->image);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $about->image = $path;
                $about->save();
            }
            return redirect()->route('admin.about.index')->withSuccess('Üstünlikli Uýgedildi');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        try{
            File::delete($about->image);
            $about->delete();
            return redirect()->route('admin.about.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.about.index')->withErrors($e->getMessage());
        }
    }
}
