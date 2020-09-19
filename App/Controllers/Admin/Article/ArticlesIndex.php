<?php
namespace App\Controllers\Admin\Article;

use App\Controllers\Controller;
use App\Models\Article;


class ArticlesIndex extends Controller
{
    protected function handle()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../../../templates/header_html.php');
        $this->view->display(__DIR__ . '/../../../../templates/admin_html.php');
        $this->view->display(__DIR__ . '/../../../../templates/footer_html.php');
    }
}