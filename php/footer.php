<div class="col-12">
    <footer>
        <?php echo $site->title(); ?>&nbsp;&#45;&nbsp;<?php echo $L->get('powered'); ?> <a href="https://www.bludit.com/">Bludit</a>&nbsp;CC&#45;BY&#45;SA&nbsp;<?php
        $copyYear = 2023;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?><br>
        <a href="<?php echo $site->url() ?>/rss.xml">RSS Feed</a>&nbsp;&#8226;&nbsp;<?php echo $L->get('credits'); ?>&nbsp;<a href="https://angga.win">Angga</a>
    </footer>
</div>