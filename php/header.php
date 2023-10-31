<header class="header">
    <div class="row">
        <div class="col-4 brand_col">
            <a class="brand" href="<?php echo $site->url() ?>"><?php echo $site->title(); ?></a>
        </div>
        <div class="col-8">
            <nav class="nav-right" aria-label="primary">
            <?php foreach ($staticContent as $tmp) : ?>
                <a href="<?php echo $tmp->permalink(); ?>"><?php echo $tmp->title(); ?></a>
            <?php endforeach ?>
            </nav>
        </div>
    </div>
</header>