<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class PageController extends Controller
{
    public function welcome()
    {
        $message = 'Tramite l\'header puoi spostarti in altre pagine!';
        return view('welcome', compact('message'));
    }
    public function about()
    {
        $message = 'About';
        return view('about', compact('message'));
    }
    public function comics()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }
    public function showComic(Comic $comic)
    {
        return view('comic_details', compact('comic')); // views/comic_details.blade.php    
    }
}