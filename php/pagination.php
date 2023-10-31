<div class="row">
    <div class="col-12">
    <?php if (Paginator::numberOfPages() > 1) : ?>
        <div class="pagination">
        <?php if (Paginator::showNext()) : ?>
            <a href="<?php echo Paginator::nextPageUrl() ?>"><span class="arrow">&#10096;</span>&nbsp;<?php echo $L->get('previous'); ?></a>
        <?php endif; ?>
        <?php if (Paginator::showPrev()) : ?>
            <a href="<?php echo Paginator::previousPageUrl() ?>"><?php echo $L->get('next'); ?>&nbsp;<span class="arrow">&#10097;</span></a>
        <?php endif; ?>
        </div>
    <?php endif; ?>
    </div>
</div>