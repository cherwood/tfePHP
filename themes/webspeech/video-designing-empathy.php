<?php /*
	Template Name: Video-designing-empathy
*/ ?>

<?php get_header(); ?>

  <div id="video">
   <div class="wrapper">
   
    <h1>Designing with Empathy</h1>
    
    <p class="date-time">27 Mai, 2013 
      <a class="play iframe fancybox" href="http://player.vimeo.com/video/70018634?autoplay=1">
      <span class="fui-play"></span>
     </a>
     40 minutes
    </p>   
  
     <p id="confVideoBy">Par <strong>Aaron Gustafson</strong></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEO *** -->	
  
  <div id="videoOption">
   <div class="wrapper">
  
     <ul>
      <li id="confLieu">
        <p><strong>Conférence</strong><br />
        <a href="http://2014.beyondtellerrand.com/" target="_blank">Beyond Tellerrand</a></p>
      </li>
      <li id="confSon">
        <p><strong>Son</strong><br />
        <a href="<?php bloginfo('template_directory'); ?>/images/son/beyondTellerand-aaron-gustafson.zip">Télécharger</a></p>
      </li>
      <li id="confSlide">
        <p><strong>Slides</strong><br />
        <a href="http://fr.slideshare.net/AaronGustafson/designing-with-empathy-beyond-tellerrand-2013" target="_blank">Slide share</a></p>
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
      
      <img id="videoProfileConferencier" src="<?php bloginfo('template_directory'); ?>/images/aaron-gustafson-conferencier.jpg" alt="Conférencier" />
      <p>
        <strong>Aaron Gustafson</strong>
        Stratégie et Architecture des sites web
      </p>
      <p id="videoProfileNet">
        <a class="iframe fancybox" href="<?php bloginfo('template_directory'); ?>/conferencier/aaron-gustafson.html"><img src="<?php bloginfo('template_directory'); ?>/images/info.png" alt="Info conferencier"/></a>
        <a target="_blank" href="https://twitter.com/AaronGustafson"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter conferencier"/></a>
      </p>
    
    </div><!-- *** END VIDEOProfile *** -->
    
    <div id="videoTexte">
      
      <p>Chaque décision que nous faisons affects la façon dont les personnes perçoivent nos produits. 
Nous avons tous entendu le cri de ralliement pour le « user-centered design » sur l’utilisateur, mais même ceux d'entre nous qui attribuent à cet idéal ont souvent recours à nos propres préjugés et instincts lorsqu'il s'agit de prendre des décisions comment les personnes perçoivent notre contenu et nos services.<br />
Tristement, ceci signifie souvent que nous prenons des décisions que l’on pense bon pour nos « utilisateurs » qu’une foule anonyme, impersonnelle plutôt qu'en réalité essayer de comprendre les perspectives, l'environnement, les capacités et les inconvénients des personnes réels qui nous devons ici servir.
      </p>
    
    </div><!-- *** END VideoTexte *** -->
    
    <div id="videoquote">
    
      <cite>
        Don’t gloss over any part of your website.
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
















