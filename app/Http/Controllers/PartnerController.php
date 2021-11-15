<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.create');
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
            $partner = Partner::create([
                'title_tk' => $request->title_tk,
                'testimonial_tk' => $request->testimonial_tk,
                'title_ru' => $request->title_ru,
                'testimonial_ru' => $request->testimonial_en,
                'title_en' => $request->title_en,
                'testimonial_en' => $request->testimonial_en,
            ]);

            if($request->has('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $partner->image = $path;
                $partner->save();
            }
            return redirect()->route('admin.partner.index')->withSuccess('Üstünlikli goşuldy');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        try {
            $partner->update([
                'title_tk' => $request->title_tk,
                'title_ru' => $request->title_ru,
                'title_en' => $request->title_en,
                'testimonial_tk' => $request->testimonial_tk,
                'testimonial_ru' => $request->testimonial_ru,
                'testimonial_en' => $request->testimonial_en,
            ]);

            if($request->has('image')) {
                File::delete($partner->image);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $destination =  public_path() .'/images/';
                $image->move($destination,$filename);
                $path = 'images/' . $filename;
                $partner->image = $path;
                $partner->save();
            }
            return redirect()->route('admin.partner.index')->withSuccess('Üstünlikli Uýgedildi');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        try{
            File::delete($partner->image);
            $partner->delete();
            return redirect()->route('admin.partner.index')->withSuccess('Üstünlikli pozuldy');
        }
        catch(\Exception $e){
            return redirect()->route('admin.partner.index')->withErrors($e->getMessage());
        }
    }
}
