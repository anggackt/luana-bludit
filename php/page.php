<?php Theme::plugins('pageBegin'); ?>
<article itemscope itemtype="https://schema.org/BlogPosting">
    <section class="mini_hero">
        <h1 itemprop="headline"><?php echo $page->title() ?></h1>
    </section>
    <?php if (!$page->isStatic() && !$url->notFound()) : ?>
    <div class="meta_top">
        <ul>
            <li><?php echo $L->get('date'); ?>:&nbsp;<time datetime="<?php echo $page->date('Y-m-d') ?>" itemprop="dateCreated datePublished"><?php echo $page->date() ?></time></li>
            <li><?php echo $L->get('author'); ?>:&nbsp;<span itemprop="author publisher"><?php echo $page->user('nickname'); ?></span></li>
        </ul>
    </div>
    <?php endif ?>
    <?php if ($page->coverImage()): ?>
    <div class="featured_image">
        <img itemprop="image" src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>">
    </div>
    <?php endif ?>
    <div class="artikel" itemprop="articleBody">
        <?php echo $page->content(); ?>
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
    <div class="sharing_bottom">
        <span><?php echo $L->get('share') ?>:</span><br>
        <a href="#" onclick="MyWindow=window.open('https://twitter.com/intent/tweet?source=<?php echo $page->permalink() ?>&text=<?php echo $page->title() ?>:%20<?php echo $page->permalink() ?>','MyWindow','width=600,height=300'); return false;"><?php echo $L->get('share-t') ?></a>
        <a id="first" href="#" onclick="MyWindow=window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->permalink() ?>&quote=<?php echo $page->title() ?>','MyWindow','width=600,height=300'); return false;"><?php echo $L->get('share-f') ?></a>
        <a href="mailto:?subject=<?php echo $page->title() ?>&body=<?php echo $page->description(); ?>:%20<?php echo $page->permalink() ?>"><?php echo $L->get('share-e') ?></a>
    </div>
    <?php Theme::plugins('pageEnd'); ?>
</article>