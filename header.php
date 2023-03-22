<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/vam5svp.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'my-portfolio'); ?></a>


		<header class="container">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<?php 	
						$global_web_title = get_option( 'global_web_title' ) ?? '';
					?>
					<?php  if( $global_web_title ) { ?> 
						<a class="navbar-brand brand" href="<?php echo home_url('/') ?>"><?php echo $global_web_title; ?></a>
					<?php } else { ?>
						<a class="navbar-brand brand" href="<?php echo home_url('/') ?>"><?php echo get_bloginfo('name') ?? 'My Portfolio'; ?></a>
					<?php } ?>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/about')) ?>">Who am i</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/#working')) ?>">Projects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/#experience')) ?>">Experience</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/#achievements')) ?>">Certs</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/#badges')) ?>">Skills</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo home_url(('/#education')) ?>">Education</a>
							</li>
						</ul>
						<ul class="navbar-nav mb-2 mb-lg-0 social align-items-center">
							<?php if (get_option('about_resume')) : ?>
								<li class="nav-item">
									<a class="nav-link download-resume" href="<?= wp_get_attachment_url(get_option('about_resume')) ?>" target="_blank" download>Download Resume</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('youtube_url')) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= get_option('youtube_url') ?>" target="_blank"><i class="fab fa-youtube"></i>Youtube</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('linkedin_url')) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= get_option('linkedin_url') ?>" target="_blank"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('twitch_url')) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= get_option('twitch_url') ?>" target="_blank"><i class="fab fa-twitch"></i>Twitch</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('twitter_url')) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= get_option('twitter_url') ?>" target="_blank"><i class="fab fa-twitter"></i>Twitter</a>
								</li>
							<?php endif; ?>
							<?php if (get_option('github_url')) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= get_option('github_url') ?>" target="_blank"><i class="fab fa-github"></i>GitHub</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>