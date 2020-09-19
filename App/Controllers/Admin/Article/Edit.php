<?php
namespace App\Controllers\Admin\Article;
use App\Controllers\Controller;


class Edit extends Controller
{
    protected function handle()
    {
        if(isset($_POST['title'], $_POST['contents'])) {
            $article = \App\Models\Article::findById($_GET['id']);
            $article->title = $_POST['title'];
            $article->contents = $_POST['contents'];
            $article->save();
            header('Location: /?ctrl=admin');
            exit;
        }

        $this->view->article = \App\Models\Article::findById($_GET['id']);
       echo $this->view->render(__DIR__ . '/../../../../templates/header_html.php');
       echo $this->view->render(__DIR__ . '/../../../../templates/article_edit_html.php');
       echo $this->view->render(__DIR__ . '/../../../../templates/footer_html.php');
    }
}
