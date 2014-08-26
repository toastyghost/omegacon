<?php
/*
Template Name: Tickets 
*/
?>

<?php get_header(); ?>

			<div id="content">
				
				<div id="sun"></div>
				<div id="cloud1"></div>
				<div id="cloud2"></div>

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									<p class="byline vcard"><?php
										#printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
									?></p>


								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									
									<article style="margin: 0 auto; max-width: 600px;">
										<!--<h2>Important Announcement: Online registration will close TONIGHT (Thursday, Sept 26) at MIDNIGHT! If you do not buy your admission online before then, you will have to do so at the door!</h2>
										<p>Our checkout is done through PayPal which is encrypted and secure.</p>
										<p>Please note that while tickets are transferrable to another guest, there are <strong>no refunds</strong> once your purchase is complete.</p>
										<p>If you experience technical difficulties with the registration process, please contact <a href="mailto:josh@omegaconvention.com">josh@omegaconvention.com</a> with a description of what you were trying to do and why you were unable to do so. Thanks!</p>-->
										<?php the_content(); ?>
									</article>
									
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>

								</footer> <!-- end article footer -->

								<?php #comments_template(); ?>

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
