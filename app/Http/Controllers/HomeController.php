<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Moment;
use App\Models\Category;
use App\Models\Suggest;
use App\Models\Partner;

class HomeController extends BaseController
{

    public function index() 
    {   
        $moments = Moment::orderBy('id','DESC')->get();
        $partners = Partner::orderBy('id','ASC')->get();
        $suggests = Suggest::orderBy('id','DESC')->get();
        return view('front.index', compact('moments', 'suggests', 'partners'));
    }

    public function about()
    {
        $about = About::find(1);
        return view('front.about', ['about' => $about] );
    }

    public function moment()
    {
        $moments = Moment::orderBy('id','DESC')->get();
        return view('front.moment', compact('moments'));
    }

    public function product()
    {
        $categories = Category::orderBy('id','ASC')->get();
        return view('front.product', compact('categories'));
    }

    public function suggest()
    {
        $suggests = Suggest::orderBy('id','ASC')->get();
        return view('front.suggest', compact('suggests'));
    }

    public function suggestshow(Suggest $id)
    {
        return view('front.suggest-single', ['id' => $id]);
    }





    public function sendMail(Request $request)
    {
        try {
            $details = [
                'title' => 'Mail from Zamana.com',
                'body' => $request->content
            ];
            
            \Mail::to('hojajepbar@gmail.com')->send(new \App\Mail\MyTestMail($details));
            return redirect()->back();
        }catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }    
}
