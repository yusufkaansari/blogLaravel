<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;
class Homepage extends Controller
{
    public function index(){
      $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);
      $data['articles']->withPath(url('sayfa'));
      $data['categories']=Category::inRandomOrder()->get();
      //$data['articles']=Article::orderBy('created_at','DESC')->get();

      return view('homepage',$data);
    }
    public function single($category,$slug){
      // eğer kategorilerde böyle bir kategory varsa çalışacak
		  $category=Category::where('slug',$category)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
  		$article=Article::where('slug',$slug)->first() ?? abort(403,'Böyle bir yazı bulunamadı');
      $article->increment('hit');
		  $data['article']=$article;
  		$data['categories']=Category::inRandomOrder()->get();
  		return view('single',$data);
	}
    public function category($slug){
      $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
  		$data['category']=$category;
      //$data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
      $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(2);

      $data['categories']=Category::inRandomOrder()->get();
      return view('category',$data);
    }


}
