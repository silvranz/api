<?php

use Phalcon\Mvc\Controller;

class PostsController extends Controller
{
    public function index()
    {
        echo "ini index";
    }

    public function show($slug)
    {
        echo "ini show + parameter slug=".$slug;
    }
}