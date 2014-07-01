<?php
/**
* Tool to generate query: http://generatewp.com/wp_query/
*
* Dependency: ACF, especially get_field()
*  http://www.advancedcustomfields.com/resources/functions/get_field/
*/

$query = createQuery($wp_query, 'tmt-deal-posts', []);

// The Loop
$content = "";
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$id = get_the_ID();
		$url = get_post_meta( $id, 'url', true );
		
		$image_repo = get_bloginfo('template_directory') . "/assets/images/";
		$img_src = "http://placehold.it/200"; // $image_repo . "shoe.png";  Use the deal-thumb rendition with get_the_post_thumbnail( $post_id, $size, $attr );
		
		$deal = get_the_content();
		$title = get_the_title();

		$coupons = "";
		if (have_rows("coupon_codes") ) {
			while ( have_rows("coupon_codes") ) {
				the_row();
				$code = get_sub_field("code");
				$description = get_sub_field("description");
				$expirationDate = get_sub_field("expiration_date");
				$coupons .= "<p code='sale-flower20'><span class='blue'>CODE:</span><span class='orange'>$code</span><span class='coupon-description'>$description</span><span class='coupon-expiration'>(EXP. $expirationDate)</span></p>";
			}
		}

		
		$article = <<<ARTICLE
		<div id='deals-$id' class='latestDealsBox'> <!-- start b -->
			<div class='floatLeft pb10 mr10 two200by200'>
				<a href='$url'><img src='$img_src'></a>
				<div class='f11 ctr80'>
					<a href='$url'>$title</a>
				</div>
			</div>
			
			<div class='left pb10'> <!-- a -->
				<div caption='sale'><a href='$url'>Macy's <span>20% off</span> All Items coupon (+ Free Shipping on $99), <span>25% off</span> Sitewide coupon (+ Clearance Sale, deals from <span>$3</span>)</a>
				</div>
				<p code='sale-flower20'>
					<span class='blue'>CODE:</span><span class='orange'>FLOWER20</span>
					<span class='blue'>PIN:</span><span class='orange'>1490</span>
					<span>(EXP.3/31)</span>
				</p>
				<p code='sale-flower20'>
					<span class='blue'>CODE:</span><span class='orange'>FLOWER20</span>
					<span class='blue'>PIN:</span><span class='orange'>1490</span>
					<span>(EXP.3/31)</span>
				</p>
				<p code='sale-flower20'>
					<span class='blue'>CODE:</span><span class='orange'>FLOWER20</span>
					<span class='blue'>PIN:</span><span class='orange'>1490</span>
					<span>(EXP.3/31)</span>
				</p>
				$coupons
				$deal
				<div sale='props-headliner'>
					Stock up on stylish essentials for a steal with the Warehouse Event at Land's End, down jackets, vests, shoes and more - plus free shipping on $50. Some picks:
				</div>
				<ul sale='props-cat'>
					<li>Women's Tops, Cardigans (from <b>$4</b>)</li>
					<li>Snoes, Clogs, Mocs (from <b>$19</b>)</li>
					<li>Men's Shirts (from <b>$6</b>)</li>
					<li>Men's Pants (from <b>$12</b>)</li>
					<li><b>View all items &gt;</b></li>
				</ul> <!-- sale='props-cat' -->
				<p title='View More'>
					View more in <a class='more' href='#'>Apparel</a>, <a href='#'>Gifts</a>, <a href='#'>Jewelry</a>
				</p>
			</div>	<!-- ends a -->

		</div> <!-- .latestDealsBox -->
ARTICLE;
		$content .= $article;
	}
}
wp_reset_postdata();

?>


<div id="latestDeals" class="panel panel-default widerPanel">  <!-- starts d -->
	<div class="panel-heading">
		<h3 style="text-align: left" class="panel-title">LATEST DEALS</h3>
	</div> <!-- .panel-heading -->
	<div class="panel-body">

		<?php echo $content;?>

			 
			 
	</div> <!-- .panel-body -->
</div> <!-- ends d -->
