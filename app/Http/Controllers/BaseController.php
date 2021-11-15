<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $infos = About::whereIn('id', [2, 3, 4])->get();
        View::share('infos', $infos);
    }
}
