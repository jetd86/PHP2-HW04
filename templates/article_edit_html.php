<div class="row justify-content-md-center">
    <div class="col-md-8">
        <h1>Редактирование новости #<?php echo $this->article->id?></h1>
        <form method="post" action="/admin/article_edit.php?article_edit&id=<?php echo $this->article->id?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Заголовок</label>
                <input name="title" type="text" class="form-control" value="<?php echo $this->article->title?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Полное описание</label>
                <textarea name="contents" class="form-control" id="exampleFormControlTextarea1"
                          rows="10"><?php echo $this->article->contents?></textarea>
            </div>
            <button type="submit" class="btn btn-info">Сохранить</button>
            <a href="/admin/" type="button" class="btn btn-secondary">Отменить</a>
        </form>

    </div>
</div>