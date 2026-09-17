<?php $engine->include( 'header' ); ?>
<section id="content" class="site-content">
	<main id="main" class="content-area">
		<article id="" class="post">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( $single->title() ); ?></h1>
				<div class="entry-metadata">
					<?= $single->date(); ?>
				</div>
            </header>
            <div class="entry-content">
                <?= $single->content() ?>
            </div>
            <footer class="entry-footer">

			<?php if ( $tags = $single->terms( 'category' ) ) : ?>
				<div class="entry-terms">
					Tagged:
					<?php foreach ( $tags as $tag ) : ?>
						<a href="<?= e( $tag->uri() ) ?>">#<?= e( $tag->name() ) ?></a>
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</footer>
		</article>
	</main>
    <aside id="secondary" class="widget-area">
        <h2 class="widget-title">Sidebar</h2>
        <p>This is the sidebar content.</p>
    </aside>
</section>
<?php $engine->include( 'footer' ); ?>