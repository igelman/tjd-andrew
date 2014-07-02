<?php
/**
* Tool to generate query: http://generatewp.com/wp_query/
*
* Dependency: ACF, especially get_field()
*  http://www.advancedcustomfields.com/resources/functions/get_field/
*/

$query = createQuery($wp_query, 'tmt-deal-posts', []);
$image_repo = get_bloginfo('template_directory') . "/assets/images/";
$bullet_img = $image_repo . "star.png";

// The Loop
$content = "";
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$id = get_the_ID();
		$url = get_post_meta( $id, 'url', true );
		$deal = get_the_content();
		$title = get_the_title();

		$article = <<<ARTICLE
		<article id='expiring-$id' title='expiring soon'>
			<div class='floatLeft'>
				<img src='$bullet_img'>
			</div>
			<div class='expBox'>
				<div>
					<a href='$url'>$title</a>
				</div>
				<div>
					<span class='blue'>CODE:</span>
					<span class='orange'>XCYCC</span>
					<span>(Exp.6/25)</span>
				</div>
			</div>
		</article>
ARTICLE;
		$content .= $article;
	}
}
wp_reset_postdata();


?>

<div class="panel panel-default shorterPanel floatRight">
	<div class="panel-heading left">
		<h3 class="panel-title" id="more_exp_soon">MORE EXPIRING SOON</h3>
	</div>
	
	<div class="panel-body left" title="Today and This Week">
		<div class="f18 mb15">
			Today and this week!
		</div>
		<?php echo $content; ?>

		<!-- Last article needs  style="border-bottom: 0 -->
	</div>
</div>  