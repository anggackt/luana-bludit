<?php
if ($WHERE_AM_I != 'search')
    return;

$searchKey = $url->slug();
$search = substr($searchKey, strpos($searchKey, "/") + 1);
?>

<section class="mini_hero">
    <h1><?php echo $L->get('search-filter') ?>&nbsp;<?php echo $search ?></h1>
</section>

<?php include(THEME_DIR_PHP . 'home.php'); ?>