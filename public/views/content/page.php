<section id="content" class="site-content">
	<main id="main" class="content-area">
        <article id="" class="post">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( $page->title() ); ?></h1>
            </header>
            <div class="entry-content">
                <?= $page->content() ?>
            </div>
        </article>
	</main>
    <aside id="secondary" class="widget-area">
        <?= $engine->categories() ?>
        <?= $engine->archives() ?>
        <?= $engine->recent_posts() ?>
    </aside>
</section>