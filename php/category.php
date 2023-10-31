<?php
if ($WHERE_AM_I != 'category')
    return;

$categoryKey = $url->slug();
$category = new Category($categoryKey);
?>

<section class="mini_hero">
    <h1><?php echo $L->get('category-filter') ?>&nbsp;<?php echo $category->name(); ?></h1>
    <p><?php echo $category->description(); ?></p>
</section>

<?php include(THEME_DIR_PHP . 'home.php'); ?>