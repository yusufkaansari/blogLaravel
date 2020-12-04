<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;

class Homepage extends Controller
{
    public function index(){
      $data['categories']=Category::inRandomOrder()->get();
      $data['articles']=Article::orderBy('created_at','DESC')->get();
      return view('homepage',$data);
    }

}
