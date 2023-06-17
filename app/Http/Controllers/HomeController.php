<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BlogController;
class HomeController extends Controller
{
    function index(BlogController $blogs)
    {
        $blogs =(new BlogController)->blogShow();
        return view('pages.blog',compact('blogs'));
    }
    function singleBlog($id)
    {
      $blog=  (new BlogController)->blog($id);
 
        return view('pages.singleBlog', compact('blog'));
    }
}
