<?php

namespace App\Http\Controllers;



class PostController extends Controller
{
    public function create()
    {
        return view('create_post');
    }
    public function edit()
    {
        return view('edit');
    }
    public function delete()
    {
        return view('delete');
    }
}