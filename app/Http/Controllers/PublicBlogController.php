<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Post;
use App\Category;
use App\SubCateGory;
use App\Frontend;
class PublicBlogController extends Controller
{


    public function schoolCollege()
    {
      $sc_posts = Post::with('user','category','subcategory')->where('category_id','1')->orderBy('id','DESC')->get();
      return response()->json(['schoolcollege'=>$sc_posts],200);
    }

     public function latestPost()
    {
      $latestposts = Post::with('user','category','subcategory')->orderBy('id','DESC')->get();
      return response()->json(['latestPosts'=>$latestposts],200);
    }

     public function argentPost()
    {
      $argentposts = Post::with('user','category','subcategory')->where('featured','argent')->orderBy('id','DESC')->get();
      return response()->json(['argentPosts'=>$argentposts],200);
    }

     public function sliderPost()
    {
      $sliderposts = Post::with('user','category','subcategory')->where('featured','slider')->orderBy('id','DESC')->get();
      return response()->json(['sliderPosts'=>$sliderposts],200);
    }

     public function nuPost()
    {
      $nuposts = Post::with('user','category','subcategory')->where('category_id','2')->orderBy('id','DESC')->get();
      return response()->json(['nuPosts'=>$nuposts],200);
    }

     public function puPost()
    {
      $puposts = Post::with('user','category','subcategory')->where('category_id','3')->orderBy('id','DESC')->get();
      return response()->json(['puPosts'=>$puposts],200);
    }

      public function sportsPost()
    {
      $sportsposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['sportsPosts'=>$sportsposts],200);
    }

     public function gjPost()
    {
      $gjposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['gjPosts'=>$gjposts],200);
    }

     public function pjPost()
    {
      $pjposts = Post::with('user','category','subcategory')->where('category_id','48')->orderBy('id','DESC')->get();
      return response()->json(['pjPosts'=>$pjposts],200);
    }




     public function singlepostById($slug)
    {

      $singlePost = Post::with('user','category','subcategory')->where('slug',$slug)->first();
      return response()->json(['singlePost'=>$singlePost],200);
    }

     public function categoryIdByPost($id)
    {

      $categoryIdByPosts = Post::with('user','category','subcategory')->where('category_id',$id)->orderBy('id','DESC')->get();
      return response()->json(['categoryIdByPosts'=>$categoryIdByPosts],200);
    }

      public function SearchPost()
    {
    	$search =\Request::get('s');
    	
    	$SeacrhPosts = Post::with('user','category','subcategory')
      ->where('title','LIKE',"%$search%")
      ->orwhere('description','LIKE',"%$search%")
      ->orderby('id','desc')
      ->get();
      return response()->json(['SearchPosts'=>$SeacrhPosts],200);
    	
    
    }


}
