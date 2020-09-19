<section class="container-row" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="head"><h1><?php echo $this->article->title; ?></h1></div>
            <div class="note">
                <?php echo $this->article->contents; ?>
            </div>
            <div class="date">
                <blockquote>дата создания: <?php echo $this->article->created_at; ?>; автор: <?php echo $this->article->author->name; ?></blockquote

            </div>
        </div>
    </div>
</section>