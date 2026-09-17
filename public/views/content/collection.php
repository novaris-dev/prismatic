<?php $engine->include( 'header' ); ?>
<section id="content" class="site-content">
    <main id="main" class="content-area">
        <?= $engine->each( 'entry.collection', $collection, 'entry' ) ?>
    </main>
    <aside id="secondary" class="widget-area">
        <h2 class="widget-title">Sidebar</h2>
        <p>This is the sidebar content.</p>
    </aside>
</section>
<?php $engine->include( 'footer' ); ?>