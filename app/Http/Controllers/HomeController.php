<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\models\Announcement; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $categories = Category::all();
       View::share('categories', $categories);
    }
    /* public function index()
    {
        return view('welcome');
    } */
   
    public function newAnnouncement() 
    {
        return view('announcement.new');
    }

    public function createAnnouncement(AnnouncementRequest $request)
    {
        $a = new Announcement();
        $a->title = $request->input('title');
        $a->body = $request->input('body');
        $a->category_id = $request->input('category');
        $a->price = $request->input('price');
        $a->user_id = Auth::id();
        $a->save();
        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }

    public function details($id) 
    {
        $announcement = Announcement::findOrFail($id);
        return view("announcement.details",["announcement"=>$announcement]);
    }
}
