<?php
 /*
	Template Name: ConferencesTest
*/ 
 

get_header(); ?>

  <div id="listeConf">
      <div class="wrapper">
      
        <div id="themeConf">
            
            <h2>Thèmes</h2>
            
            <?php include ('category-navlist.php'); ?>
                    
       </div><!-- *** END ThemeConf *** -->	

	<div id="listeConfVideo">
       

		<?php if ( have_posts() ) : ?>
			<header>
				<h2><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h2>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-conferencetest', get_post_format() ); ?>
			<?php endwhile; ?>
			

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
		<hr class="clear"/>

	</div>
	
  <hr class="clear"/>
        
      </div><!-- *** END WRAPPER *** -->	     
  </div><!-- *** END LISTECONF *** -->	 

  <div class="push"></div>  

<?php get_footer(); ?>