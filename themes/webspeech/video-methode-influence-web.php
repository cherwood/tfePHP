<?php /*
	Template Name: Video-methode-influence
*/ ?>

<?php get_header(); ?>

  <div id="video">
   <div class="wrapper">
   
    <h1>Les méthodes d'influence dans le web</h1>
    
    <p class="date-time">11 Octobre, 2013 
      <a class="play iframe fancybox" href="http://player.vimeo.com/video/83618666?autoplay=1">
      <span class="fui-play"></span>
     </a>
     15 minutes
    </p>
  
     <p id="confVideoBy">Par <strong>Yannick Bonnieux</strong></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEO *** -->	
  
  <div id="videoOption">
   <div class="wrapper">
  
     <ul>
      <li id="confLieu">
        <p><strong>Conférence</strong><br />
        <a href="http://www.paris-web.fr/" target="_blank">Paris web</a></p>
      </li>
      <li id="confSon">
        <p><strong>Son</strong><br />
        <a href="<?php bloginfo('template_directory'); ?>/images/son/Les-méthodes-d’influence-dans-le-web-par-l’exemple-par-Yannick-Bonnieux.zip">Télécharger</a></p>
      </li>
      <li id="confSlide">
        <p><strong>Slides</strong><br />
        <a href="http://fr.slideshare.net/YannickBonnieux/les-mthodes-dinfluence-dans-le-web-par-lexemple-paris-web-2013" target="_blank">Slide share</a></p>
      </li>
      <li id="confAvis">
        <p><strong>Avis</strong><br />
        <a href="#videoAvis">14 Tweets</a></p>
      </li>
            
      <li id="confPartage">
        <p><strong>Partager</strong><br />
        <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=webspeechFr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;">
            <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter share"/>
        </a>
        
        <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;">
          <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook share"/>
        </a>
        
        <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;">
          <img src="<?php bloginfo('template_directory'); ?>/images/google+.png" alt="google+ share"/>
        </a>
        </p>
      </li>
      <hr class="clear"/>
     </ul>
  
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOoPTION *** -->	  
  
  <div id="videoDescription">
   <div class="wrapper">
   
    <h2>Description</h2>
    
    <div id="videoProfile">
      
      <img id="videoProfileConferencier" src="<?php bloginfo('template_directory'); ?>/images/methodeInfluenceWeb-conferencier.jpg" alt="Conférencier" />
      <p>
        <strong>Yannick Bonnieux</strong>
        Développeur web
      </p>
      <p id="videoProfileNet">
        <a class="iframe fancybox" href="<?php bloginfo('template_directory'); ?>/conferencier/yannick-bonnieux.html"><img src="<?php bloginfo('template_directory'); ?>/images/info.png" alt="Info conferencier"/></a>
        <a target="_blank" href="https://twitter.com/yannickbonnieux"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter conferencier"/></a>
      </p>
    
    </div><!-- *** END VIDEOProfile *** -->
    
    <div id="videoTexte">
      
      <p>Nous sommes tous des consommateurs, et sur internet nous consommons tous. Certains acteurs du numérique cherchent par tous les moyens à nous faire agir : acheter, échanger, participer, etc. Les techniques utilisées sont issues des méthodes d’influence, voire même de manipulation. Pour les mettre en évidence, c’est sous l’angle de l’utilisateur que Yannick Bonnieux vous montrera des sites présents dans notre quotidien.
      </p>
    
    </div><!-- *** END VideoTexte *** -->
    
    <div id="videoquote">
    
      <cite>
        Nous sommes tous des consommateurs, 
        et sur internet nous consommons tous.
      </cite>
    
    </div><!-- *** END VideoQuote *** -->
       
   <hr class="clear"/>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOdESCRIPTION *** -->	
  
  <div id="videoAvis">
    <div class="wrapper">
    
    <!-- <img id="chatimgTweeter" src="<?php bloginfo('template_directory'); ?>/images/chat.svg" alt="chat tweeter"/> -->
    <h2>Discutez et échangez vos avis<br /> sur la vidéo conférence <span id="EndSubs">Grâce à Twitter</span></h2>
    
    <a class="button button-blue"
    href="http://twitter.com/share?&amp;text=Conférence avis" target="popup" 
    onClick="ouvre('http://twitter.com/share?&amp;text=%23dwmaj ');return false">Postez un avis
    </a>
    
    </div><!-- *** END WRAPPER *** -->	 
  </div><!-- *** END VideoAvis *** -->
  
  <div id="videoTweet">
    <div id="testo" class="wrapper">
    
    <?php echo do_shortcode('[ditty_news_ticker id="79"]'); ?>
    
    <hr class="clear"/>
    
    </div><!-- *** END WRAPPER *** -->	 
  </div><!-- *** END VideoTweet *** -->
  
  <!-- *** POSTEZ UN AVIS *** -->  
  
  <?php include ('postezUnAvis.php'); ?>
  		
      
   <!-- *** END POSTEZ UN AVIS *** -->  
     
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
















