<?php snippet('header') ?>

<div id="primary" class="site-content" role="main">
    <article class="page">
        <header class="entry-header">
            <h1 class="entry-title"><?= $page->title() ?></h1>
        </header>
            
        <div class="entry-content clearfix">
            <?= $page->text()->toBlocks() ?>
        </div>

        <?php snippet('cards') ?>
    </article>
</div>

<?php snippet('footer') ?>
