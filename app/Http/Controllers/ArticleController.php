<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $articls = article::all();
     return view('articls',compact('articls'));
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-Article');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        Product::create([
            'name'=>$request['name'],
            'description'=>$request['description'] ,
            
            


        ]);
        return redirect()->back()->with('message', 'Product added successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticletRequest $request,Article $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $product)
    {
        //
    }
}
