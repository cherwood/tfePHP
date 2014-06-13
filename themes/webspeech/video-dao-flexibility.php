<?php /*
	Template Name: Video-dao-flexibility
*/ ?>

<?php get_header(); ?>

  <div id="video">
   <div class="wrapper">
   
    <h1>A Dao of Flexibility</h1>
    
    <p class="date-time">02 Novembre, 2010 
      <a class="play iframe fancybox" href="http://player.vimeo.com/video/34662135?autoplay=1">
      <span class="fui-play"></span>
     </a>
     55 minutes
    </p>   
    
  
     <p id="confVideoBy">Par <strong>Ethan Marcotte</strong></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEO *** -->	
  
  <div id="videoOption">
   <div class="wrapper">
  
     <ul>
      <li id="confLieu">
        <p><strong>Conférence</strong><br />
        <a href="http://aneventapart.com/" target="_blank">An Event Apart</a></p>
      </li>
      <li id="confSon">
        <p><strong>Son</strong><br />
        <a href="<?php bloginfo('template_directory'); ?>/images/son/ethanmarcotte-aeventappart.zip">Télécharger</a></p>
      </li>
      <li id="confSlide">
        <p><strong>Slides</strong><br />
        <a class="slidenone" href="#fakelink">Slide share</a></p>
      </li>
      <li id="confAvis">
        <p><strong>Avis</strong><br />
        <a href="#videoAvis">14 Tweets</a></p>
      </li>
      <li id="confPartage">
        <p><strong>Partager</strong><br />
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter share"/></a>
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook share"/></a>
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/google+.png" alt="google+ share"/></a>
        </p>
      </li>
     </ul>
  
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOoPTION *** -->	  
  
  <div id="videoDescription">
   <div class="wrapper">
   
    <h2>Description</h2>
    
    <div id="videoProfile">
      
      <img id="videoProfileConferencier" src="<?php bloginfo('template_directory'); ?>/images/daoflexibility-conferencier.jpg" alt="Conférencier" />
      <p>
        <strong>Ethan Marcotte</strong>
        web designer & developer
      </p>
      <p id="videoProfileNet">
        <a class="iframe fancybox" href="<?php bloginfo('template_directory'); ?>/conferencier/ethan-marcotte.html"><img src="<?php bloginfo('template_directory'); ?>/images/info.png" alt="Info conferencier"/></a>
        <a target="_blank" href="https://twitter.com/beep"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter conferencier"/></a>
      </p>
    
    </div><!-- *** END VIDEOProfile *** -->
    
    <div id="videoTexte">
      
      <p>Des navigateurs mobiles aux netbooks et tablettes, les utilisateurs visitent vos sites via plusieurs écrans et navigateurs. Les écrans d’androïde entrent dans plus de 500 « standard » de viewport différends et qui n’acceptent pas les mêmes pixels.
En utilisant les méthodes qui impliquent des grilles fluides, des images flexibles et des questions sur les media queries CSS3, Ethan encouragent les concepteurs à penser au-delà du desktop, et de montrer comment on faire des sites qui répondent aux besoins de vos utilisateurs.
      </p>
    
    </div><!-- *** END VideoTexte *** -->
    
    <div id="videoquote">
    
      <cite>
        The web isn’t a “platform” like a native OS: it’s a continuum.
      </cite>
    
    </div><!-- *** END VideoQuote *** -->
       
   <hr class="clear"/>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOdESCRIPTION *** -->	
  
  <div id="videoAvis">
    <div class="wrapper">
    
    <!-- <img id="chatimgTweeter" src="<?php bloginfo('template_directory'); ?>/images/chat.svg" alt="chat tweeter"/> -->
    <h2>Discutez et échangez vos avis<br /> sur la vidéo conférence</h2>
    
    <a class="button button-blue"
    href="http://twitter.com/share?&amp;text=Conférence avis" target="popup" 
    onClick="ouvre('http://twitter.com/share?&amp;text=Une nouvelle conférence %23dwmaj ');return false">Postez un avis
    </a>
    
    </div><!-- *** END WRAPPER *** -->	 
  </div><!-- *** END VideoAvis *** -->
  
  <div id="videoTweet">
    <div id="testo" class="wrapper">
    
    <?php echo do_shortcode('[ditty_news_ticker id="83"]'); ?>
    
    <hr class="clear"/>
    
    </div><!-- *** END WRAPPER *** -->	 
  </div><!-- *** END VideoTweet *** -->
     
  <div class="push"></div>    
  
  
  
  <!-- SCRIPT VIDEO -->
  
  
 <script type="text/javascript">
    function ouvre(fichier) {ff=window.open(fichier,"popup","width=700,height=500,left=100,top=100") }
  </script> 
  <script src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.min.js"></script>
  <script>
    /* Masonry Twitter  */
    var container = document.querySelector('.mtphr-dnt-tick-contents');
    var msnry = new Masonry( container, {
      // options
      columnWidth: 0,
      itemSelector: '.mtphr-dnt-twitter-tick'
    });
  </script>
 
   
<?php get_footer(); ?>
















