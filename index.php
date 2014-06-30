<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * http://kovshenin.com/2013/get_template_part/
 *
 */
 
/**
 * Insert header.php
 * (which includes the <head> and opening <body>)
 * and navbar.php
 * (which calls a bunch of other files:
 * -searchform.php
 * -icontact.php
 * -menu.php
 * )
*/ 
get_header();
get_template_part( 'navbar' );
?>

	  
    <section templ="wrapper">
		
	   <header>
		  <img src="<?php bloginfo('template_directory') ?>/assets/images/tipjardaily.png" title="TipJar Daily" alt="Logo">	  
		  <div id="searchBox">
			  <div class="searchField">
				  <table>
					  <tr>
						  <td>
			  			    <label class="sr-only" for="searchMerchants">Search Merchants</label>
			  			    <input type="text" class="form-control f11" id="searchMerchants" placeholder="Search merchants by name (eq.sephora hp)">
						  </td>
						  <td class="ml10">
							  <button title="Browse Coupons" class="btn">Browse Coupons</button>
						  </td>
					  </tr>
					  <tr>
						  <td class="pt3">
			  			    <label class="sr-only" for="subscribeEmail">Search Merchants</label>
			  			    <input type="text" class="form-control" id="subscribeEmail" placeholder="Subscribe via Email">
						  </td>
						  <td class="pt3">
							  <button title="Browse Coupons" class="btn">Subscribe</button>
						  </td>
					  </tr>
				  </table>	
			  </div>		  		 
	      </div>
	   </header>
	   		
       <div class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			  <li><a href="#">HOME <span>&#124;</span></a></li>
              <li><a href="#">WOMEN'S <span>&#124;</span></a></li>
              <li><a href="#">MEN'S <span>&#124;</span></a></li>
              <li><a href="#">KID'S <span>&#124;</span></a></li>
			  <li><a href="#">FREE + IN-STORE <span>&#124;</span></a></li>
			  <li><a href="#">BEAUTY + HEALTH <span>&#124;</span></a></li>
			  <li><a href="#">ELECTRONICS <span>&#124;</span></a></li>
			  <li><a href="#">FOOD + GIFTS <span>&#124;</span></a></li>
			  <li><a href="#">DEAL-OF-THE-DAY</a></li>
            </ul>       
          </div>
        </div>
       </div>   

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
	    
	  <section templ="twoCol">
	  
	   <div class="floatLeft">
	     <div id="latestDeals" class="panel panel-default widerPanel">  <!-- starts d -->
	      <div class="panel-heading">
			 <h3 style="text-align: left" class="panel-title">LATEST DEALS</h3>
		  </div>
		  <div class="panel-body"> <!-- start c -->
			 <div class="latestDealsBox"> <!-- start b -->
				 <div class="floatLeft pb10 mr10 two200by200">
					 <img src="images/shoe.png">
					 <div class="f11 ctr80">
						 Margot mid-wedge elastic espadrilles,<b>$19</b>
					 </div>
				</div>
				<div class="left pb10"> <!-- a -->
					<div caption="sale">Macy's <span>20% off</span> All Items coupon (+ Free Shipping on $99), <span>25% off</span> Sitewide coupon (+ Clearance Sale, deals from <span>$3</span>)</div>
					<p code="sale-flower20">
						<span class="blue">CODE:</span><span class="orange">FLOWER20</span>
						<span class="blue">PIN:</span><span class="orange">1490</span>
						<span>(EXP.3/31)</span>
					</p>
					<div sale="props-headliner">
						Stock up on stylish essentials for a steal with the Warehouse Event at Land's End, down jackets, vests, shoes and more - plus free shipping on $50. Some picks:
					</div>
					<ul sale="props-cat">
						<li>Women's Tops, Cardigans (from <b>$4</b>)</li>
						<li>Snoes, Clogs, Mocs (from <b>$19</b>)</li>
						<li>Men's Shirts (from <b>$6</b>)</li>
						<li>Men's Pants (from <b>$12</b>)</li>
						<li><b>View all items &gt;</b></li>
					</ul>
					<p title="View More">
						View more in <a class="more" href="#">Apparel</a>, <a href="#">Gifts</a>, <a href="#">Jewelry</a> 
					</p>
				</div>	<!-- ends a -->
			 </div> <!-- ends b -->
			 
			 
			 
			 <div class="latestDealsBox"> <!-- start b -->
				 <div class="floatLeft pb10 mr10 two200by200">
					 <img src="images/shoe.png">
					 <div class="f11 ctr80">
						 Margot mid-wedge elastic espadrilles,<b>$19</b>
					 </div>
				</div>
				<div class="left pb10"> <!-- a -->
					<div caption="sale">Macy's <span>20% off</span> All Items coupon (+ Free Shipping on $99), <span>25% off</span> Sitewide coupon (+ Clearance Sale, deals from <span>$3</span>)</div>
					<p code="sale-flower20">
						<span class="blue">CODE:</span><span class="orange">FLOWER20</span>
						<span class="blue">PIN:</span><span class="orange">1490</span>
						<span>(EXP.3/31)</span>
					</p>
					<div sale="props-headliner">
						Stock up on stylish essentials for a steal with the Warehouse Event at Land's End, down jackets, vests, shoes and more - plus free shipping on $50. Some picks:
					</div>
					<ul sale="props-cat">
						<li>Women's Tops, Cardigans (from <b>$4</b>)</li>
						<li>Snoes, Clogs, Mocs (from <b>$19</b>)</li>
						<li>Men's Shirts (from <b>$6</b>)</li>
						<li>Men's Pants (from <b>$12</b>)</li>
						<li><b>View all items &gt;</b></li>
					</ul>
					<p title="View More">
						View more in <a class="more" href="#">Apparel</a>, <a href="#">Gifts</a>, <a href="#">Jewelry</a> 
					</p>
				</div>	<!-- ends a -->
			 </div> <!-- ends b -->
			 
			 
			 <div class="latestDealsBox"> <!-- start b -->
				 <div class="floatLeft pb10 mr10 two200by200">
					 <img src="images/shoe.png">
					 <div class="f11 ctr80">
						 Margot mid-wedge elastic espadrilles,<b>$19</b>
					 </div>
				</div>
				<div class="left pb10"> <!-- a -->
					<div caption="sale">Macy's <span>20% off</span> All Items coupon (+ Free Shipping on $99), <span>25% off</span> Sitewide coupon (+ Clearance Sale, deals from <span>$3</span>)</div>
					<p code="sale-flower20">
						<span class="blue">CODE:</span><span class="orange">FLOWER20</span>
						<span class="blue">PIN:</span><span class="orange">1490</span>
						<span>(EXP.3/31)</span>
					</p>
					<div sale="props-headliner">
						Stock up on stylish essentials for a steal with the Warehouse Event at Land's End, down jackets, vests, shoes and more - plus free shipping on $50. Some picks:
					</div>
					<ul sale="props-cat">
						<li>Women's Tops, Cardigans (from <b>$4</b>)</li>
						<li>Snoes, Clogs, Mocs (from <b>$19</b>)</li>
						<li>Men's Shirts (from <b>$6</b>)</li>
						<li>Men's Pants (from <b>$12</b>)</li>
						<li><b>View all items &gt;</b></li>
					</ul>
					<p title="View More">
						View more in <a class="more" href="#">Apparel</a>, <a href="#">Gifts</a>, <a href="#">Jewelry</a> 
					</p>
				</div>	<!-- ends a -->
			 </div> <!-- ends b -->
			 
			 <div class="latestDealsBox"> <!-- start b -->
				 <div class="floatLeft pb10 mr10 two200by200">
					 <img src="images/shoe.png">
					 <div class="f11 ctr80">
						 Margot mid-wedge elastic espadrilles,<b>$19</b>
					 </div>
				</div>
				<div class="left pb10"> <!-- a -->
					<div caption="sale">Macy's <span>20% off</span> All Items coupon (+ Free Shipping on $99), <span>25% off</span> Sitewide coupon (+ Clearance Sale, deals from <span>$3</span>)</div>
					<p code="sale-flower20">
						<span class="blue">CODE:</span><span class="orange">FLOWER20</span>
						<span class="blue">PIN:</span><span class="orange">1490</span>
						<span>(EXP.3/31)</span>
					</p>
					<div sale="props-headliner">
						Stock up on stylish essentials for a steal with the Warehouse Event at Land's End, down jackets, vests, shoes and more - plus free shipping on $50. Some picks:
					</div>
					<ul sale="props-cat">
						<li>Women's Tops, Cardigans (from <b>$4</b>)</li>
						<li>Snoes, Clogs, Mocs (from <b>$19</b>)</li>
						<li>Men's Shirts (from <b>$6</b>)</li>
						<li>Men's Pants (from <b>$12</b>)</li>
						<li><b>View all items &gt;</b></li>
					</ul>
					<p title="View More">
						View more in <a class="more" href="#">Apparel</a>, <a href="#">Gifts</a>, <a href="#">Jewelry</a> 
					</p>
				</div>	<!-- ends a -->
			 </div> <!-- ends b -->
		 </div> <!-- ends c -->
       </div> <!-- ends d -->
	  

	   <div class="panel panel-default" style="height: 350px;">
	     <div class="panel-heading left quickOffersHeader" id="quickOffersHeader">
			 <h3 class="panel-title"><span>QUICK OFFERS</span>
				 <span title="View all your favorites">View all your favorite stores and coupons at a glance</span></h3>
		 </div>
		 <div class="panel-body" style="background-color:#000; padding:0">
		    <div id="quickOffersBodySearch">
				<div>
				  <div class="floatLeft f15" title="Apparel">APPAREL (247)</div>
				  <div><label class="sr-only" for="apparelSearch">Apparel Search</label> <input type="text" style="width: 300px" class="form-control f11" id="apparelSearch" placeholder="SEARCH FOR A STORE"></div>
				</div>
			</div>		
		 </div>
	     <div id="quickOffersBodyCount">
			  <div class="floatLeft f15">APPAREL (247 Merchants)</div>
		</div>
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
				<tr>
					<td><span>Macys.com</span></td>
					<td>Lowest Prices of the...</td>
					<td>2BCGEXX</td>
					<td>12/14</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
				<tr>
					<td><span>Nike.com</span></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
				<tr>
					<td><span>Nordstorm.com</span></td>
					<td>Free Shipping...</td>
					<td>2BCGEXX</td>
					<td>12/14</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
				<tr>
					<td><span>ShoeBuy.com </span></td>
					<td>20% Off</td>
					<td>2BCGEXX</td>
					<td>12/14</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
				<tr>
					<td><span>Kohls.com</span></td>
					<td>Lowest Prices of the...</td>
					<td>15% Off</td>
					<td>12/14</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
				<tr>
					<td><span>Sole Society</span></td>
					<td>25% Off</td>
					<td>2BCGEXX</td>
					<td>12/14</td>
					<td style="text-align:center"><button class="btn btn-xs btn-success">View More</button></td>
				</tr>
			</tbody>
		</table>
	   </div>   
      </div>
	  
	</div> <!-- ends the right side (1st column) -->
  
	<div class="panel panel-default shorterPanel floatRight">
	     <div class="panel-heading left" title="Subscribe via Email">
			 <h3 class="panel-title">SUBSCRIBE VIA EMAIL</h3>
		 </div>
		 <div class="panel-body">
		    <label class="sr-only" for="subscribeViaEmail">Subscribe Via Email</label>
		    <input type="text" class="form-control w350 f11" id="subscribeViaEmail" placeholder="Email Address">
			<button id="subscribe" type="button" class="btn">Subscribe!</button>
		 </div>
	  </div>   
	   
		
	  <div class="panel panel-default shorterPanel floatRight">
	     <div class="panel-heading left">
			 <h3 class="panel-title" id="more_exp_soon">MORE EXPIRING SOON</h3>
		 </div>
		 <div class="panel-body left" title="Today and This Week">
		    <div class="f18 mb15">Today and this week!</div>
			
			<div class="grey3">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
  					<div>
  						<span class="blue">CODE:</span>
  						<span class="orange">XCYCC</span>
  						<span>(Exp.6/25)</span>
  					</div>
				</div>
			</div>	
			
			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>	

			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
			<article title="expiring soon">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
			<article title="expiring soon" style="border-bottom: 0">
				<div class="floatLeft">
					<img src="images/star.png">
				</div>
				<div class="expBox">
					<div>Land's End: 25% off + Free Shipping</div>
					<div>
						<span class="blue">CODE:</span>
						<span class="orange">XCYCC</span>
						<span>(Exp.6/25)</span>
					</div>
				</div>
			</article>
			
		 </div>
	   </div>  
	   
	   
	   <div id="greatTip" class="panel panel-default shorterPanel floatRight left">
	     <div class="panel-heading">
			 <h3 class="panel-title">SUBMIT A GREAT TIP</h3>
		 </div>
		 <div class="panel-body">
		    <div title="Send us a tip or coupon">Send us a tip or coupon and help others save!</div>
		 </div>
	     <p class="searchField center">
	       <label class="sr-only" for="enterCode">Enter Code</label>
	       <input type="text" class="form-control f11" id="enterCode" placeholder="Enter Code">
	     </p>
	     <p class="searchField center">
	       <label class="sr-only" for="enterCodeDesc">Enter Discount Description</label>
	       <textarea rows="4" class="form-control f11" id="enterCodeDesc" placeholder="Enter discount description"></textarea>
	     </p>
		 <p class="center">
			 <button class="btn btn-lg btn-success">Submit this tip</button>
	     </p>
	   </div>

	   <div id="popularDeals" class="panel panel-default shorterPanel floatRight left">
		 <div class="panel-heading">
			 <h3 class="panel-title">POPULAR DEALS THIS WEEK</h3>
		 </div>
		 <div class="panel-body">
		    <ul class="f12">
				<li>Macy's: 25% off</li>
				<li>Kohl's 20% off</li>
				<li>Sear's 21% off</li>
			</ul>
		 </div>
	  </div>
  
	  <div id="popularMerchants" class="panel panel-default shorterPanel floatRight left">
	    <div class="panel-heading">
		 <h3 class="panel-title">POPULAR MERCHANTS</h3>
	  </div>
	  <div class="panel-body left">
	    <ul class="f12">
	  	  <li>Sak's Fifth Avenue</li>
		  <li>Nordstorm</li>
		  <li>Zappos</li>
	    </ul>  
	  </div>
	 </div>

 
	<div id="popularMerchants" class="panel panel-default shorterPanel floatRight left">
	 <div class="panel-heading" style="background-color: #666">
	  <h3 class="panel-title white"><img src="images/email_icon.png" alt="email"> DAILY EMAIL</h3>
	 </div>
	 <div class="panel-body left lightGrey" style="border-bottom: 0px; text-align:left">
	   <div class="f15 mb15">You won't miss a day of the best Coupons and Deals!</div>
	   <div>
	    <label class="sr-only" for="dailyEmail">Daily Email</label>
	    <input type="text" class="form-control f11" id="dailyEmail" placeholder="email@address.com">
	   </div>
	   <p style="margin-top: 5px;text-align:left">
		  Refer friends, invite them to the program and help them save!
	   </p>
	   <div>
	    <label class="sr-only" for="emailFriend">Refer a friend</label>
	    <input type="text" class="form-control f11" id="emailFriend" placeholder="email@address.com">
	   </div>
	   <p align="center" style="margin-top: 15px">
		  <button id="subscribeDailyEmailbtn" type="button" class="btn btn-lg btn-primary">Subscribe!</button>
	   </p>
	 </div>
	</div> 
	
	<?php get_template_part( 'footer-content') ?>

	</div>
   </section>

<?php get_footer(); ?>