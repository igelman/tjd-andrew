<?php
/**
* Tool to generate query: http://generatewp.com/wp_query/
*
* Dependency: ACF, especially get_field()
*  http://www.advancedcustomfields.com/resources/functions/get_field/
*/

$extraArgs = [];
$query = createQuery($wp_query, "tmt-coupon-posts", $extraArgs);

// The Loop
$rows = "";
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
 		$query->the_post();
		$id = get_the_ID();
		$title = truncate(get_the_title(), 20);
		$url = get_post_meta( $id, "url", true );
		$merchant = get_the_term_list( $id, "merchant", $before, $sep, $after );
		$code = get_field("code");
		$expires = get_field("expires");
		
		$rows .= "<tr id='coupon-tr-$id'>";
		$rows .= "<td><span>$merchant</span></td>";
		$rows .= "<td>$title</td>";
		$rows .= "<td>$code</td>";
		$rows .= "<td>$expires</td>";
		$rows .= "<td style='text-align:center'><button class='btn btn-xs btn-success'>View More</button></td>";
		$rows .= "</tr>";
 	}
}

function truncate($string, $length) {
	return substr($string, 0, strpos(wordwrap($string, $length), "\n")) . "...";
}

?>



<div class="panel panel-default" style="height: 350px;">
	<div class="panel-heading left quickOffersHeader" id="quickOffersHeader">
		<h3 class="panel-title"><span>QUICK OFFERS</span><span title="View all your favorites">View all your favorite stores and coupons at a glance</span></h3>
	</div> <!-- .panel-heading left quickOffersHeader -->
	<div class="panel-body" style="background-color:#000; padding:0">
		<div id="quickOffersBodySearch">
			<div>
				<div class="floatLeft f15" title="Apparel">
					APPAREL (247)
				</div>
				<div>
					<label class="sr-only" for="apparelSearch">Apparel Search</label>
					<input type="text" style="width: 300px" class="form-control f11" id="apparelSearch" placeholder="SEARCH FOR A STORE">
				</div>
			</div>
		</div> <!-- #quickOffersBodySearch -->
	</div> <!-- .panel-body -->
	<div id="quickOffersBodyCount">
		<div class="floatLeft f15">
			APPAREL (247 Merchants)
		</div>
	</div> <!-- #quickOffersBodyCount -->
	<table id="quickOfferTbl">
		<thead>
			<tr>
				<th>Store</th>
				<th>Details</th>
				<th>+Coupon Codes</th>
				<th>Ending</th>
				<th style="text-align:center">Go to Store</th>
			</tr>
		</thead>
		<tbody>
			<?php echo $rows; ?>
		</tbody>
	</table>
</div>