<?php /*
	Template Name: Accueil
*/ ?>

<?php get_header(); ?>

  <div id="accroche">
   <div class="wrapper">
   
  		<h1>Web Speech</h1>
  		<h2>Découvrez et partagez vos avis sur la vidéo conférence, son thème et le conférencier.</h2>
  		<a class="accrow" href="#decouvrez">
  		
  		<svg version="1.1" id="arrowSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="17px" height="10px" viewBox="0 0 17 10" enable-background="new 0 0 17 10" xml:space="preserve">
<path fill="#FFFFFF" d="M13.906,1.385c0.441-0.437,1.154-0.437,1.595,0c0.44,0.436,0.441,1.144,0,1.58l-6.37,6.243
	c-0.441,0.437-1.155,0.437-1.596,0L1.164,2.965c-0.44-0.437-0.44-1.144,0-1.58c0.441-0.437,1.154-0.437,1.595-0.001l5.574,5.121
	L13.906,1.385z"/>
</svg>

  		
  		
  		</a>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END ACCROCHE *** -->	
  
  <div id="decouvrez">
   <div class="wrapper">
   
  		<h2>Des vidéos conférences de qualité</h2>
  		<p class="intro-p">Chaque semaine, une vidéo conférence de qualité sur la thématique du web sera sélectionnée et mise en ligne dans le but d'enrichir les connaissances <br /> des professionnels et des passionnés du web.</p>
  		<img src="<?php bloginfo('template_directory'); ?>/images/decouvrez-mockup.png" alt="decouvrez les versions destock, tablette, smartphone" />
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END DECOUVREZ *** -->	  
  
  <div id="postezavis">
   <div class="wrapper">
   
  		<h2>Partagez vos avis avec la communauté</h2>
  		<p class="intro-p">Discutez et échangez vos avis sur la vidéo conférence depuis ce site à l’aide du réseau social Twitter. <span id="EndSubs">Plus besoin d'inscription !</span></p>
  		
  		<?php echo do_shortcode('[ditty_news_ticker id="80"]'); ?>
  		
  		<a class="button button-blue" href="<?php echo get_permalink(137); ?>">Découvrir</a>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END POSTEZAVIS *** -->	 
  
  <!-- *** POSTEZ UN AVIS *** -->  
  
  <?php include ('postezUnAvis.php'); ?>
  		
      
   <!-- *** END POSTEZ UN AVIS *** -->  
  
  <div id="newsletter">
   <div class="wrapper">
   
  		<h2>Soyez au courant des nouvelles vidéos conférences</h2>
  		<p>Inscrivez-vous à la Newsletter.</p>
  		
  		<form method="post" id="letterPost">
  		
    		<input id="letterEmail" type="email" placeholder="Votre adresse email">
    		<input id="letterSub" type="submit" value="S'INSCRIRE">
    		
    	</form>	
    	
    	<p id="followOnTwitter">Suivez nous sur <a target="_blank" href="https://twitter.com/webspeechFr">Twitter</a></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END HELLO *** -->	
  
     
  <div class="push"></div>    
   
<?php get_footer(); ?>
















