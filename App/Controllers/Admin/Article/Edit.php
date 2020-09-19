<?php

namespace App\Controllers\Admin\Article;
use App\Controllers\Controller;


class Edit extends Controller
{
    protected function handle()
    {

        if(isset($_GET['article_edit']) && isset($_POST['title'], $_POST['contents'])) {
            $article = \App\Models\Article::findById($_GET['id']);
            $article->title = $_POST['title'];
            $article->contents = $_POST['contents'];
            $article->save();
            header('Location: /admin/');
            exit;
        }


        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../../../templates/header_html.php');
        $this->view->display(__DIR__ . '/../../../../templates/article_edit_html.php');
        $this->view->display(__DIR__ . '/../../../../templates/footer_html.php');
    }
}
