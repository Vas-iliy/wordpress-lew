
<? get_header(); ?>

<?if(have_posts()): while (have_posts()): the_post();?>
	<? the_content(); ?>
<?endwhile;?>
<?endif;?>

<?
	$query = new WP_Query(array(
		'post_per_page' => 3
	));
?>

<div id="fh5co-blog" class="fh5co-bg-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Recent Post</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row">
			<?if($query->have_posts()): while ($query->have_posts()): $query->the_post();?>
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
