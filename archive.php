<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()): ?>
								<?php while (have_posts()): ?>
									<?php the_post(); ?>

									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

										<header class="article-header">

											<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
											<p class="byline vcard"><?php
												printf(__( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'bonestheme' )), bones_get_the_author_posts_link(), get_the_category_list(', '));
											?></p>

										</header> <?php // end article header ?>

										<section class="entry-content clearfix">

											<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

											<?php the_excerpt(); ?>

										</section> <?php // end article section ?>

										<footer class="article-footer">

										</footer> <?php // end article footer ?>

									</article> <?php // end article ?>

								<?php endwhile; ?>

								<?php require_once('_navigation.php') ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
									</footer>
								</article>

							<?php endif; ?>

						</div> <?php // end #main ?>

					</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
