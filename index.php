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
?>

	  
    <section templ="wrapper">
		<?php get_template_part( 'navbar') ?>
		<?php get_template_part( 'tiles-top') ?>
		
		<section templ="twoCol">
			<div class="floatLeft">
				<?php get_template_part( 'deals' ) ?>
				<?php get_template_part( 'listing' ) ?>

			</div> <!-- .floatLeft -->
		</section> <!-- ends the right side (1st column) -->
  <!-- This looks like a stray div closing tag or maybe it should be section closing -->

  
	   
		<?php get_template_part( 'email-signup') ?>
		<?php get_template_part( 'expiring-soon') ?>
		<?php get_template_part( 'submit-tip') ?>
	   
	   


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