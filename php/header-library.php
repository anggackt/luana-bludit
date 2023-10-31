<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">

<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo Theme::src('img/favicons/apple-touch-icon.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Theme::src('img/favicons/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Theme::src('img/favicons/favicon-16x16.png'); ?>">
<link rel="manifest" href="<?php echo Theme::src('img/favicons/site.webmanifest'); ?>">
<link rel="mask-icon" href="<?php echo Theme::src('img/favicons/safari-pinned-tab.svg'); ?>" color="#5bbad5">
<?php echo Theme::favicon('img/favicons/favicon.ico', 'image/x-icon'); ?>
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="<?php echo Theme::src('img/favicons/browserconfig.xml'); ?>">
<meta name="theme-color" content="#ffffff">

<!-- Inline CSS Embed. For FCP! LCP! PC...wait -->
<style type="text/css"><?php include(THEME_DIR_PHP . 'critical.php'); ?></style>

<!-- Header Default Libraries Embed -->
<?php if ($WHERE_AM_I != 'home'): ?>
<link rel="preload" href="<?php echo Theme::src('css/a11y-light.min.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">    
<?php endif; ?>
<link rel="preload" href="https://cdn.jsdelivr.net/npm/chota@0.9.2/dist/chota.min.css" integrity="sha256-9ytByRyWa5Gsfh45NMkDqqvXwPvk4B/6t1waLXZQ+R0=" as="style" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" href="<?php echo Theme::src('css/style.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">

<?php if ($WHERE_AM_I != 'home'): ?>
<script type="application/ld+json">
    {
        "@context" : "https://schema.org",
        "@type" : "WebSite",
        "name" : "<?php echo $site->title(); ?>",
        "url" : "<?php echo $site->url() ?>"
    }
</script>
<?php endif; ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>