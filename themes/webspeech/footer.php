<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		  </div><!-- #main -->
		</div><!-- #page -->
		<footer id="colophon" class="site-footer" role="contentinfo">
		
		  <div class="wrapper">
  
  			<p><img id="logoGris" src="<?php bloginfo('template_directory'); ?>/images/webspeech-logo-gris.svg" alt="Web speech logo gris"/></p>
  			
  			<p>
  			  <a href="<?php echo get_permalink(53); ?>">Accueil</a>
    			<a href="<?php echo get_permalink(137); ?>">Conférences</a>
    			<a href="<?php echo get_permalink(71); ?>">Contact</a>
  			</p>
  			
  			<p id="sociallink">
  			  <a id="socialTwitter" target="_blank" href="https://twitter.com/webspeechFr">Twitter</a>
  			</p>
  			
  			
  			 <hr class="clear"> 			
		  </div><!-- *** END WRAPPER *** -->	
		  
		</footer><!-- #colophon -->
	

	<?php wp_footer(); ?>
</body>
</html>