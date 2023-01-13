<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Posts;
class PostController extends Controller
{
    public function index(Post $post)
{
    return $post->get();
}
}
