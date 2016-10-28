<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Blog;

class BlogController extends Controller
{
  /**
   * @return default user view
   */
	public function index()
  {
    $blogs = Blog::all();

		return view('blog.index', compact('blogs'));
	}

  /**
   * @return default create post view
   */
	public function userCreatePost()
  {

    return view('blog.create');
  }

  /**
   * @return default read post view
   */
  public function userGetPost($id)
  {
    $post = Blog::find($id);

    return view('blog.read', compact('post'));
  }
}
