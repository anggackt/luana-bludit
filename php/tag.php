<?php
if ($WHERE_AM_I != 'tag')
    return;

$tagKey = $url->slug();
$tag = new Tag($tagKey);
?>

<section class="mini_hero">
    <h1><?php echo $L->get('tag-filter') ?>&nbsp;<?php echo $tag->name(); ?></h1>
</section>

<?php include(THEME_DIR_PHP . 'home.php'); ?>