<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;
use App\Models\HomeCard;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = HomeBanner::latest()->get();
        $cards = HomeCard::latest()->get();
        return view('index',compact("banner","cards"));
    }
}
