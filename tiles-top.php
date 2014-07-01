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
		
		$tile = <<<TILE
TILE;
		$content .= $tile;
		$tilesCount++;
	}
}

?>

<div class="well">
		  <div promotion="latest">		  	
		    <div promo="2014">
			   <span class="f18">STYLE: WOMEN'S APPAREL, SHOES &amp; ACCESSORIES</span><span> UPDATED IN THE PAST 24 HOURS</span>
			</div>		
		  </div>		
		  <div id="featuredBoxes">			   
				   <section title="Featuring Amazon">
					   <img src="images/amazon.png">
					   <p>
					   <cite title="Featured Deal">100 MP3 Albums $5 each</cite>
					   (Josh Turner, Maroon 5, Jay Z, The Killers and more)
				       </p>
				   </section>
				   <section title="Featuring Shoes">
					   <img src="images/shoes.png">
					   <p>
					   <cite title="Featured Deal">100 MP3 Albums $5 each</cite>
					   (Josh Turner, Maroon 5, Jay Z, The Killers and more)
				       </p>
				   </section>
				   <section title="Featuring Kohls">
					   <img src="images/kohls.png">
					   <p>
					   <cite title="Featured Deal">100 MP3 Albums $5 each</cite>
					   (Josh Turner, Maroon 5, Jay Z, The Killers and more)
				       </p>
				   </section>
				   <section title="Redbox" title="Featured Deal">
					   <img src="images/redbox.png">
					   <p style="margin-top: 10px">
					   <cite title="Featured Deal">100 MP3 Albums $5 each</cite>
					   (Josh Turner, Maroon 5, Jay Z, The Killers and more)
				       </p>
				   </section>				
		    </div>
	  </div>