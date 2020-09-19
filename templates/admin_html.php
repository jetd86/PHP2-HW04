<div class="container">
    <div class="row">
        <div class="col-md-auto">
            <h1>Админка</h1>
            <a href="/?ctrl=add&article" class="btn btn-success btn-sm">Добавить новость</a>
            <br>
            <br>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($this->articles as $item):
            if($i % 2 == 0){?> <div class="w-100"></div> <?php } ?>
        <div class="col">
            <div class="card">
                <h5 class="card-header">#<?php echo $i+1 ?></php></h5>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $item->title; ?></h5>
                    <a href="/?ctrl=edit&article&id=<?php echo $item->id; ?>" class="btn btn-success btn-sm">Редактировать</a>
                    <a href="/?ctrl=delete&article&id=<?php echo $item->id; ?>" class="btn btn-danger btn-sm">Удалить</a>
                </div>
            </div>
        </div>
        <?php $i++; endforeach; ?>
    </div>
</div>


