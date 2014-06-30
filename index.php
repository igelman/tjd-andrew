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
		<?php get_template_part( 'popular-deals') ?>
		<?php get_template_part( 'popular-merchants') ?>
		<?php get_template_part( 'daily-email') ?>
 

	
	<?php get_template_part( 'footer-content') ?>

	</div>
   </section>

<?php get_footer(); ?>