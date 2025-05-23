<?php

namespace App\Controllers;
use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index(): string
    {
        // open DB to return all articles
        $db = db_connect();

        // new article model created to house pulled data
        $model = new ArticleModel;

        // returns pulled data from table
        $data =  $model->findAll();

        // returns view with data passed to it
        return view('Articles/index.php', [
            'articles' => $data, 'title' => 'Articles'
        ]);
    }
    public function show($id){
        //show individual articles on a new page
        // dd($id); //dump and die
        $model = new ArticleModel;
        $article = $model->find($id);
        // dd($article);

        return view('Articles/show.php', ['article' => $article]);
    }
    public function new(){
        // return view('Articles/new.php');
        return view('Articles/new.php', [
            'title' => 'New Article'
        ]);
    }
    public function publish(){
        // establish article data
        $article = $this->request->getPost([
            'title',
            'content'
        ]);

        // establish model
        $model = new ArticleModel;

        // insert data into database
        $model->insert($article);

        // get new id and new article
        $articleId = $model->getInsertID();
        $newArticle = $model->find($articleId);

        return View("Articles/show.php", [
            'article' => $newArticle
        ]);
    }
    
}