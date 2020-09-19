<div class="row justify-content-md-center">
    <div class="col-md-8">
        <h1>Добавление новости</h1>
        <form method="post" action="/admin/add_new_article.php/?add_new_article" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Заголовок</label>
                <input name="title" type="text" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Текст новости</label>
                <textarea name="contents" class="form-control" id="exampleFormControlTextarea1"
                          rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Сохранить</button>
            <a href="/admin/" type="button" class="btn btn-secondary">Отменить</a>
        </form>

    </div>
</div>