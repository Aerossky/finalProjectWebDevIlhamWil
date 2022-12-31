<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public static $photos=[
        // Green Theme
        [
            'title' => "My darling",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed2_SM.jpg"
        ],
        [
            'title' => "We Face",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed1_sm.jpg"
        ],
        [
            'title' => "Just Us",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed3_SM.jpg"
        ],
        // Black theme
        [
            'title' => "Just Black",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed4_SM.JPG"
        ],
        [
            'title' => "Just Us",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed5_sm.JPG"
        ],
        [
            'title' => "It's Bright",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed6_sm.JPG"
        ],
        // white theme
        [
            'title' => "Welcome",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed7_sm.jpg"
        ],
        [
            'title' => "It's a secret",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed8_sm.jpg"
        ],
        [
            'title' => "Together",
            'sub' => "Prewed",
            'imagepath' => "prewed/prewed9_sm.jpg"
        ],
        // Singles sunny-city
        [
            'title' => "What?",
            'sub' => "Portrait",
            'imagepath' => "singles/single1_SM.jpg"
        ],
        [
            'title' => "I think so",
            'sub' => "Portrait",
            'imagepath' => "singles/single2_SM.jpg"
        ],
        [
            'title' => "Attention",
            'sub' => "Portrait",
            'imagepath' => "singles/single3_SM.jpg"
        ],
        [
            'title' => "Good Morning",
            'sub' => "Portrait",
            'imagepath' => "singles/single4_SM.jpg"
        ],
        // Singles At the door
        [
            'title' => "I'm away",
            'sub' => "Portrait",
            'imagepath' => "singles/single5_sm.jpg"
        ],
        [
            'title' => "Knock-knock",
            'sub' => "Portrait",
            'imagepath' => "singles/single6_sm.jpg"
        ],
        [
            'title' => "I'll wait for you",
            'sub' => "Portrait",
            'imagepath' => "singles/single7_sm.jpg"
        ],
        // Automotive Cars
        [
            'title' => "clean slate",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive1_sm.jpg"
        ],
        [
            'title' => "parked",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive2_sm.jpg"
        ],
        [
            'title' => "White Domino",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive3_sm.jpg"
        ],
        [
            'title' => "Black Domino",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive4_sm.jpg"
        ],
        // Automotive Motor
        [
            'title' => "Sided",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive5_sm.jpg"
        ],
        [
            'title' => "Sided Top",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive6_sm.jpg"
        ],
        [
            'title' => "On Point",
            'sub' => "Automotive",
            'imagepath' => "automotive/automotive7_sm.jpg"
        ],

    ];

    public static function index() {
        return collect(self::$photos);
    }
}

