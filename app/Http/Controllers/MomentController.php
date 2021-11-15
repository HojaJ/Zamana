<?php

namespace App\Http\Controllers;

use App\Models\Moment;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MomentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moments = Moment::all();
        return view('moment.index', compact('moments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moment.create');
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
            $moment = Moment::create([
                'title' => $request->title,
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $moment->image = $path;
                $moment->save();
            }
            return redirect()->route('admin.moment.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function show(Moment $moment)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function edit(Moment $moment)
    {
        return view('moment.edit', compact('moment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moment $moment)
    {
        try {
            $moment->update([
                'title' => $request->title,
            ]);

            if($request->has('image')) {
                File::delete($moment->image);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $moment->image = $path;
                $moment->save();
            }
            return redirect()->route('admin.moment.index')->withSuccess('Üstünlikli Uýgedildi');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moment  $moment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moment $moment)
    {
        try{
            File::delete($moment->image);
            $moment->delete();
            return redirect()->route('admin.moment.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.moment.index')->withErrors($e->getMessage());
        }
    }
}
