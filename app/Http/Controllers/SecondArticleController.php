<?php

namespace App\Http\Controllers;

use App\Models\SecondArticle;

class SecondArticleController extends Controller
{
    public function index()
    {
        // $data = SecondArticle::all();
        $data = SecondArticle::latest()->paginate(5);
        return view('articles.index', ['articles' => $data]);
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function detail($id)
    {
        $data = SecondArticle::find($id);
        return view('articles.detail', ['article' => $data]);
        // return "Controller Artical Detail - $id";
    }

    public function add()
    {
        $data = [["id" => 1, "name" => "News"], ["id" => 2, "name" => "Tech"],];
        return view('articles.add', ['categories' => $data]);
    }

    public function create()
    {
        // check field validation and show message
        $validator = validator(
            request()->all(),
            [
                'title' => 'required',
                'body' => 'required',
                'category_id' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $article = new SecondArticle();
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect('/articles')->with('info', 'Article successfully created!');
    }

    public function delete($id)
    {
        $article = SecondArticle::find($id);
        $article->delete();
        return redirect('/articles')->with('info', 'Article successfully deleted!');
    }

    public function edit($id)
    {
        $article = SecondArticle::find($id);
        return view('articles.update', ['article' => $article]);
    }

    public function update($id)
    {
        // check field validation and show message
        $validator = validator(
            request()->all(),
            [
                'title' => 'required',
                'body' => 'required',
                'category_id' => 'required',
            ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $article = SecondArticle::find($id);
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect('/articles')->with('info', 'Article successfully updated!');
    }
}
