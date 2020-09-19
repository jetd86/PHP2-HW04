<?php


namespace App\Controllers\Admin\Article;


use App\Controllers\Controller;

class Delete extends Controller
{

    protected function handle() :void
    {
        if(isset($_GET['article_delete'])){
            $article = \App\Models\Article::findById($_GET['id']);
            $article->delete();
            header('Location: /admin/');
            exit;
        }

    }
}