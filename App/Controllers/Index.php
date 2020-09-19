<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Article;

class Index extends Controller
{

    protected function handle()
    {
        $this->view->articles = Article::getLimitRows(4);
        $this->view->display(__DIR__ . '/../../templates/header_html.php');
        $this->view->display(__DIR__ . '/../../templates/news_html.php');
        $this->view->display(__DIR__ . '/../../templates/footer_html.php');
    }
}