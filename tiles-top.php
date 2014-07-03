<?php
/**
* Tool to generate query: http://generatewp.com/wp_query/
*
* Dependency: ACF, especially get_field()
*  http://www.advancedcustomfields.com/resources/functions/get_field/
*/
  
$extraArgs = array(
	'category_name'	=> 'tiles',
);
$query = createQuery($wp_query, 'tmt-deal-posts', $extraArgs);


$maxTiles = 4;
$tilesCount = 0;

$content = "";
if ( $query->have_posts() ) {
	while ( $query->have_posts() && $tilesCount < $maxTiles) {
		$query->the_post();
		
		$id = get_the_ID();
		$url = get_post_meta( $id, 'merchant', true );
		$title = get_the_title();
		$caption = get_the_content();
		
		$image_repo = get_bloginfo('template_directory') . "/assets/images/";
		$img_src = "http://placehold.it/200"; // $image_repo . "shoe.png";  Use the deal-thumb rendition with get_the_post_thumbnail( $post_id, $size, $attr );

		
		$tile = <<<TILE
		<section id='tile-$id' title='Featuring Amazon'>
			<a href='$url'><img src='http://placehold.it/170x200'></a>
			<p>
				<a href='$url'><cite title='Featured Deal'>$title</cite></a>
			</p>
		</section>
TILE;
		$content .= $tile;
		$tilesCount++;
	}
}
wp_reset_postdata();
?>

<div class="well">
	<div promotion="latest">
		<div promo="2014">
			<span class="f18">TODAY'S FEATURED TIPS</span><span> UPDATED IN THE PAST 24 HOURS</span>
		</div>
	</div>
	<div id="featuredBoxes">
		<?php echo $content; ?>
	</div> <!-- #featuredBoxes -->
</div>