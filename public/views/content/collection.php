<section id="content" class="site-content">
    <main id="main" class="content-area">
        <?= $engine->each( 'entry.collection', $collection, 'entry' ) ?>
    </main>
    <aside id="secondary" class="widget-area">
        <?= $engine->categories() ?>
        <?= $engine->archives() ?>
        <?= $engine->recent_posts() ?>
    </aside>

</section>