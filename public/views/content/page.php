<section id="content" class="site-content">
	<main id="main" class="content-area">
        <article id="" class="post">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( $single->title() ); ?></h1>
            </header>
            <div class="entry-content">
                <?= $single->content() ?>
            </div>
        </article>
	</main>
    <aside id="secondary" class="widget-area">
        <?= $engine->categories() ?>
        <?= $engine->archives() ?>
        <?= $engine->recent_posts() ?>
    </aside>
</section>