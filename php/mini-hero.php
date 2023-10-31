<div class="col-12">
    <section class="mini_hero">
        <?php function curlang() {echo Theme::lang();} ob_start(); curlang(); $current_language = ob_get_clean(); ?>
        <?php if ($current_language != 'ja'): ?>
        <h1><?php echo $L->get('welcome'); ?>&nbsp;<?php echo $site->title(); ?>!</h1>
        <?php elseif ($current_language == 'ja'): ?>
        <h1><?php echo $site->title(); ?>&nbsp;<?php echo $L->get('welcome'); ?>!</h1>
        <?php endif; ?>
        <p><?php echo $site->description(); ?></p>
    </section>
</div>