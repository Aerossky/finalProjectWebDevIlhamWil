<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\Pricelist;
use App\Models\Review;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome')->with([
            'carousel_top' => [
                'images/prewed/prewed1_sm.jpg',
                'images/prewed/prewed3_SM.jpg',
                'images/prewed/prewed5_sm.JPG',
            ],

            'carousel_bottom' => [
                'images/prewed/prewed6_sm.JPG',
                'images/singles/single3_SM.jpg',
                'images/singles/single2_SM.jpg',
            ],
            'reviews'=>Review::all()
        ]);
    }

    public function contact_us()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('aboutus');
    }

    public function admin()
    {
        return view('dashboard');
    }

    public function harga()
    {
         $ctgry= CategoryGallery::all();

        return view('pricelist')->with([
            'pricelist'=>Pricelist::all(),
            'ctgry'=>$ctgry,

        ]);
    }


    public function detail()
    {
        return view('detail');
    }

//    public function reviews()
//    {
//        return view('welcome', [
//            'title' => 'Reviews',
//            'main' => 'Reviews',
//            'reviews' => Review::all(),
//        ]);
//    }
}
