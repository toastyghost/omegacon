<?php
/*
Template Name: Tournament Report 
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
										<?php the_content(); ?>
										
										<?php
										
										global $wpdb;
										
										$entries = $wpdb->get_results('select * from wp_visual_form_builder_entries where form_id = 2;');
										if(!empty($entries)){
											foreach($entries as $entry){
												if(!empty($entry->data)){
													$entry_data = unserialize($entry->data);
													
													echo '<pre>';
													foreach($entry_data as $entry_field){
														if(!empty($entry_field['name']) && !empty($entry_field['value'])){
															if($entry_field['name'] != 'Please enter any two digits'){
																echo $entry_field['name'], ' => ', $entry_field['value'], "\r\n";
															}
														}
													}
													echo '</pre>';
												}
												
											}
										}
										
										?>
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