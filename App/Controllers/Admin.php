<?php


namespace App\Controllers;


use App\Models\Article;

class Admin extends Controller
{

    protected function handle()
    {
        $this->view->articles = Article::findAll();
        echo $this->view->render(__DIR__ . '/../../templates/header_html.php');
        echo $this->view->render(__DIR__ . '/../../templates/admin_html.php');
        echo $this->view->render(git__DIR__ . '/../../templates/footer_html.php');
    }
}