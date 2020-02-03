<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
     
    public function store(StoreBlogPost $request)
    {
        $qaz = new Product;
        $qaz->name = $request->name;
        $qaz->price = $request->price;
        $qaz->sale = $request->sale;
        $qaz->tel = $request->tel;
        ...
        $qaz->save();
        
        $path = 'Объявление добавленно!';
        return view('create', compact('path'));
    }

  