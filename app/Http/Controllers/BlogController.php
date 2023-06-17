<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogShow(){
        $blogs = Blog::paginate(10);
        return $blogs;
    }
    function blog($id)
    {
        $blog = Blog::find($id);
        return $blog;
    }
}
