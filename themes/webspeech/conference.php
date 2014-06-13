<?php /*
	Template Name: Conference
*/ ?>

<?php get_header(); ?>

  

  <div id="confUne">
  <span class="shadowConf shadeau"></span>
   <div class="wrapper confUneBackground">
    <div id="confUneText">
        
        
    		<h1><a href="<?php echo get_permalink(62); ?>">Les méthodes d'influence dans le web</a><span>15 minutes</span></h1>
    		<p id="confUneBy"><strong>Par Yannick Bonnieux</strong> le 11 Octobre, 2013</p>
    		<p>Nous sommes tous des consommateurs, et sur internet nous consommons tous. Certains acteurs du numérique cherchent par tous les moyens à nous faire agir : acheter, échanger, participer, etc. Les techniques utilisées sont issues des méthodes d’influence, voire même de manipulation.</p>
    		<p class="listeConfTag">
          <a href="#fakelink" class="btn btn-xs btn-primary mhm">Design</a>
          <a href="#fakelink" class="btn btn-xs btn-primary mhm">UX</a>
        </p>
    		
      </div><!-- *** END ConfUneText *** -->	
      
      <span id="confUneHover"><a href="<?php echo get_permalink(62); ?>"></a></span> 
      <span class="shadowConf shadeau"></span>
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END ConfUne *** -->	
   
  <div id="listeConf">
      <div class="wrapper">
      
        <div id="themeConf">
            
            <h2>Thèmes</h2>
            
          <?php include ('category-navlist.php'); ?>
          
       </div><!-- *** END ThemeConf *** -->	
       
       
       <div id="listeConfVideo">
       
          <h2>Dernières conférences</h2>
  
  <?php while ( have_posts() ) : the_post(); ?>
  			
  			
  			<?php the_content(); ?>
  			
  			
  
        <?php // WP_Query arguments
        $args = array (
        	'post_type'              => 'conference',
        	'posts_per_page'         => '-1',
        );
        
        // The Query
        $query = new WP_Query( $args );
        
        // The Loop
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
            get_template_part( 'content-conference' );
        	}
        } else {
        	// no posts found
        }
        
        // Restore original Post Data
        wp_reset_postdata();
        
        ?>
        
            
            
  			
      <?php endwhile; ?>
  		
      <ul class="pagination-plain">
              <li class="previous"><a href="#fakelink">&larr; Précédent</a></li>
              <li class="active"><a href="#fakelink">1</a></li>
              <li><a href="#fakelink">2</a></li>
              <li><a href="#fakelink">3</a></li>
              <li><a href="#fakelink">4</a></li>
              <li class="next"><a href="#fakelink">Suivant &rarr;</a></li>
            </ul>
       
          
       </div>
   
   
   
       
       <div id="confSign">
       
        <h3>Newsletter</h3>
        
        <form method="post" id="letterPost">
  		
      		<input id="letterEmail" type="email" placeholder="Votre adresse email">
      		<input id="letterSub" type="submit" value="S'INSCRIRE">
    		
        </form>	
       
       </div><!-- *** END PAGE *** -->
       
       
       <div id="last-tweet">
          
          <h2>Derniers avis</h2>
          <?php echo do_shortcode('[ditty_news_ticker id="81"]'); ?>
       
       </div><!-- *** END LAST TWEET *** -->
       
       
       
       
       
       <hr class="clear"/>
        
      </div><!-- *** END WRAPPER *** -->	     
  </div><!-- *** END LISTECONF *** -->	  
  
     
  <div class="push"></div>    
   
<?php get_footer(); ?>
















