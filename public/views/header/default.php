<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?= e( asset( 'resources/scss/screen.scss' ) ) ?>" />
<?php Novaris\Font\fonts(); ?>
</head>
<body>
<div id="container" class="site-container">
	<header id="masthead" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<?php Novaris\Theme\Site\display_site_title(); ?>
				<?php if ( config( 'app.tagline' ) ) { ?>
					<span class="sep" aria-hidden="true">&middot;</span>
					<?php Novaris\Theme\Site\display_site_description();
				} ?>
			</div>
			<?= $engine->include( 'menu.primary' ); ?> 
		</div>
	</header>