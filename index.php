<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
    <?php include(THEME_DIR_PHP . 'header-library.php'); ?>
</head>

<!-- Start Body! -->
<body>
    <?php Theme::plugins('siteBodyBegin'); ?>
    <div class="wrapper">
        <a href="#utama" tabindex="0" class="langsung_ke_konten"><?php echo $L->get('direct'); ?></a>
        <!-- Main Navigation -->
        <?php include(THEME_DIR_PHP . 'header.php'); ?>
        
        <main class="row main_content">
            <!-- Hero/About -->
            <?php if ($WHERE_AM_I == 'home'): ?>
            <?php include(THEME_DIR_PHP . 'mini-hero.php'); ?>
            <?php endif; ?>

            <!-- Main Content -->
            <div class="col-12">
                <section id="utama" tabindex="-1">    
                    <?php include(THEME_DIR_PHP . $WHERE_AM_I . '.php'); ?>
                </section>
            </div>
            
            <!-- Pagination -->
            <?php if ($WHERE_AM_I == 'home'): ?>
                <?php include(THEME_DIR_PHP . 'pagination.php'); ?>
            <?php endif; ?>
        </main>
        <div class="row side_content">
            <!-- Side Bar -->
            <?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
            <!-- Footer -->
            <?php include(THEME_DIR_PHP . 'footer.php'); ?>
        </div>
    </div>
    <?php if ($WHERE_AM_I != 'home'): ?>
        <script src="https://cdn.jsdelivr.net/npm/prismjs@1.29.0/prism.min.js" integrity="sha256-WygJkXg81QpcstolcPZdIP3MwQn27eHIlrV/LnBvlLg=" crossorigin="anonymous" referrerpolicy="no-referrer" nonce="DhcnhD3khTMePgXw" defer></script>   
    <?php endif; ?>
    <?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>