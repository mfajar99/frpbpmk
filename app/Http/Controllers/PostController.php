<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Organization;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;


class PostController extends Controller
{
   public function index()
   {
      $title = '';

      if (request('category')) {
         $category = Category::firstWhere('slug', request('category'));
         $title = ' in ' . $category->name;
      }

      if (request('author')) {
         $author = User::firstWhere('username', request('author'));
         $title = ' by ' . $author->name;
      }

      return view('posts', [
         'title' => 'All Posts' . $title,
         'active' => 'posts',
         'profiles' => Profile::all(),
         'organizations' => Organization::all(),
         'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString()
      ]);
   }

   public function show(Post $post)
   {
      return view('post', [
         'title' => 'Detail Post',
         'active' => 'posts',
         'profiles' => Profile::all(),
         'post' => $post
      ]);
   }
}
