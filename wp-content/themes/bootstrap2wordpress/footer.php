<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boostrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>

<!-- BOOTSTRAP CORE JAVASCRIPT
				placed at the end of the document so the pages loads faster!
	 ======================================================= -->

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.0.min.js"></script>
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	 <!-- Typekit Fonts -->
	 <script src="https://use.typekit.net/qda5lie.js"></script>
	 <script>
		 try {
			 Typekit.load({
				 async: true
			 });
		 } catch (e) {}
	 </script>

</body>
</html>
