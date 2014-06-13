<?php /*
	Template Name: Video-humble-border-radisu
*/ ?>

<?php get_header(); ?>

  <div id="video">
   <div class="wrapper">
   
    <h1>The humble border-radius</h1>
    
    <p class="date-time">14 Juin, 2013 
      <a class="play iframe fancybox" href="http://player.vimeo.com/video/70171266?autoplay=1">
      <span class="fui-play"></span>
     </a>
     45 minutes
    </p>   
  
     <p id="confVideoBy">Par <strong>Lea Verou</strong></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEO *** -->	
  
  <div id="videoOption">
   <div class="wrapper">
  
     <ul>
      <li id="confLieu">
        <p><strong>Conférence</strong><br />
        <a href="http://cssday.nl/2014" target="_blank">CSS day</a></p>
      </li>
      <li id="confSon">
        <p><strong>Son</strong><br />
        <a href="<?php bloginfo('template_directory'); ?>/images/son/humble-border-radius-lea-verou.zip">Télécharger</a></p>
      </li>
      <li id="confSlide">
        <p><strong>Slides</strong><br />
        <a href="http://lea.verou.me/humble-border-radius/#for-browser" target="_blank">Lea verou</a></p>
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
      
      <img id="videoProfileConferencier" src="<?php bloginfo('template_directory'); ?>/images/thehumbleborderradisu-conferencier.jpg" alt="Conférencier" />
      <p>
        <strong>Lea Verou</strong>
        Front end engineer
      </p>
      <p id="videoProfileNet">
        <a class="iframe fancybox" href="<?php bloginfo('template_directory'); ?>/conferencier/lea-verou.html"><img src="<?php bloginfo('template_directory'); ?>/images/info.png" alt="Info conferencier"/></a>
        <a target="_blank" href="https://twitter.com/LeaVerou"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter conferencier"/></a>
      </p>
    
    </div><!-- *** END VIDEOProfile *** -->
    
    <div id="videoTexte">
      
      <p>Le border-radius semble superficiellement simple, mais il peut être très puissant. Cependant, sa puissance est réservée à ceux qui savent les lâcher. Parce que sous sa simplicité superficielle, il cache certains de algorithmes les plus complexes de CSS.
      </p>
    
    </div><!-- *** END VideoTexte *** -->
    
    <div id="videoquote">
    
      <cite>
        I’m a web standards geek
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
















