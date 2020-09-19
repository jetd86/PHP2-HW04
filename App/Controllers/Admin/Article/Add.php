<?php


namespace App\Controllers\Admin\Article;


use App\Controllers\Controller;
use App\Models\Article;

class Add extends Controller
{

    protected function handle()
    {

        if(isset($_GET['add_new_article']) && isset($_POST['title'], $_POST['contents'])){
            $art = new Article();
            $art->title = $_POST['title'];
            $art->contents= $_POST['contents'];
            $art->save();
            header('Location: /admin/');
            exit;
        }

        $this->view->display(__DIR__ . '/../../../../templates/header_html.php');
        $this->view->display(__DIR__. '/../../../../templates/add_new_article_html.php');
        $this->view->display(__DIR__ . '/../../../../templates/footer_html.php');
    }
}