<? get_header(); ?>

	<div id="fh5co-blog" class="fh5co-bg-section" style="background-color: #fcfcfc">
		<div class="container">
			<div class="row">
				<?if(have_posts()): while (have_posts()): the_post();?>
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="<? the_permalink(); ?>">
								<? if(has_post_thumbnail()) {
									$img_url = get_the_post_thumbnail_url();
								} else {
									$img_url = 'http://picsum.photos/800/570';
								}?>
								<img src="<?=$img_url ?>" alt="">
							</a>
							<div class="blog-text">
								<span class="posted_on"><? the_time('j M'); ?></span>
								<span class="comment"><a href=""><?=get_comments_number() ?><i class="icon-speech-bubble"></i></a></span>
								<h3><a href="<? the_permalink(); ?>"><? the_title(); ?>n</a></h3>
								<p><? the_content(''); ?></p>
								<a href="<? the_permalink(); ?>" class="btn btn-primary"><? _e('Read More', 'law'); ?></a>
							</div>
						</div>
					</div>
				<?endwhile;?>
				<?endif;?>
			</div>
		</div>
	</div>

<? get_footer(); ?>