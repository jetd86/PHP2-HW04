<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Article;

class Index extends Controller
{

    protected function handle()
    {
        $this->view->articles = Article::getLimitRows(4);
        echo $this->view->render(__DIR__ . '/../../templates/header_html.php');
        echo $this->view->render(__DIR__ . '/../../templates/news_html.php');
        echo $this->view->render(__DIR__ . '/../../templates/footer_html.php');
    }
}