<?php
namespace App\Controllers;

use \App\Models\Article as ArticleModel;

class Article extends Controller
{


    public function access(): bool
    {
        $Article = ArticleModel::findById($_GET['id']);
        if($Article->id == 2) {
            return false;
        }
        return true;
    }


    protected function handle(): void
    {

        $this->view->article = ArticleModel::findById($_GET['id']);

        echo $this->view->render(__DIR__ . '/../../templates/header_html.php');
        echo $this->view->render(__DIR__ . '/../../templates/article_html.php');
        echo $this->view->render(__DIR__ . '/../../templates/footer_html.php');
    }
}