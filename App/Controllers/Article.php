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

        $this->view->display(__DIR__ . '/../../templates/header_html.php');
        $this->view->display(__DIR__ . '/../../templates/article_html.php');
        $this->view->display(__DIR__ . '/../../templates/footer_html.php');
    }
}