<?php

namespace App\Http\Controllers;

use App\Models\SecondArticle;
use App\Http\Requests\StoreSecondArticleRequest;
use App\Http\Requests\UpdateSecondArticleRequest;

class SecondArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SecondArticle::all();
        return view('articles.index', ['articles' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSecondArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecondArticleRequest $request)
    {
    //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecondArticle  $secondArticle
     * @return \Illuminate\Http\Response
     */
    public function show(SecondArticle $secondArticle)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecondArticle  $secondArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(SecondArticle $secondArticle)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecondArticleRequest  $request
     * @param  \App\Models\SecondArticle  $secondArticle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecondArticleRequest $request, SecondArticle $secondArticle)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecondArticle  $secondArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecondArticle $secondArticle)
    {
    //
    }
}
