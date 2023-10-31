<?php foreach ($content as $page) : ?>
<article class="list_artikel">
    <h2><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h2>
    <div class="meta_top">
        <time datetime="<?php echo $page->date('Y-m-d') ?>" class="meta_date"><?php echo $L->get('date') ?>&#58;&nbsp;<?php echo $page->date() ?></time>
    </div>
    <div class="pratinjau_artikel">
    <?php if ($page->description()) : ?>
        <p><?php echo $page->description(); ?></p>
    <?php endif ?>
    </div>
    <?php if (!empty($page->tags(true))): ?>
    <div class="meta_bottom">
        <span class="tags_text"><?php echo $L->get('tag'); ?>:</span>
        <ul class="meta_tag">
        <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
            <li><a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><?php echo $tagName; ?></a></li>
        <?php endforeach ?>
        </ul>
    </div>
    <?php endif; ?>
</article>
<?php endforeach ?>