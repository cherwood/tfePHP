<?php /*
	Template Name: Video-designing-empathy
*/ ?>

<?php get_header(); ?>

  <div id="video" style="background-image: url('<?php the_field('conference_video_image'); ?>');">
   <div class="wrapper">
   
    <h1><?php the_title() ?></h1>
    
    <p class="date-time"><?php if(get_field('date_de_la_conference')) { ?>
               	<?php the_field('date_de_la_conference'); ?>
               <?php } else { ?>
               	Ajouter une date.
               <?php } ?> 
               
               
       <a class="play iframe fancybox" href="<?php the_field('conference_video_import'); ?>">        
      
      
      
      
      <span class="fui-play"></span>
     </a>
     <?php if(get_field('duree_de_la_conference')) { ?>
        <?php the_field('duree_de_la_conference'); ?>
      <?php } else { ?>
        <span>Ajouter une durée.</span>
      <?php } ?>
    </p>   
  
     <p id="confVideoBy">Par <strong>
     <?php if(get_field('conference_par')) { ?>
        <?php the_field('conference_par'); ?>
      <?php } else { ?>
          Ajouter un conférencier.
      <?php } ?></strong></p>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEO *** -->	
  
  <div id="videoOption">
   <div class="wrapper">
  
     <ul>
      <li id="confLieu">
        <p><strong>Conférence</strong><br />
        <?php the_field('conference_lieu'); ?></p>
      </li>
      <li id="confSon">
        <p><strong>Son</strong><br />
        <?php the_field('conference_son'); ?></p>
      </li>
      <li id="confSlide">
        <p><strong>Slides</strong><br />
        <?php the_field('conference_slides'); ?></p>
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
     </ul>
  
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOoPTION *** -->	  
  
  <div id="videoDescription">
   <div class="wrapper">
   
    <h2>Description</h2>
    
    <div id="videoProfile">
      
      <?php if(get_field('conferencier_image')) { ?>
    		<img id="videoProfileConferencier" src="<?php the_field('conferencier_image'); ?>" alt="" />
      <?php } ?>
      
      <p>
        <strong>
          <?php if(get_field('conference_par')) { ?>
            <?php the_field('conference_par'); ?>
          <?php } else { ?>
              Ajouter un conférencier.
          <?php } ?>
        </strong>
        
        <?php if(get_field('conferencier_profession')) { ?>
          <?php the_field('conferencier_profession'); ?>
        <?php } else { ?>
            Ajouter une profession.  
        <?php } ?>
      </p>
      <p id="videoProfileNet">
        
        <a class="iframe fancybox" href="<?php bloginfo('template_directory'); ?><?php the_field('information_sur_le_conferencier'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/info.png" alt="Info conferencier"/></a>
        
        
        
        
        
        <a target="_blank" href="<?php the_field('twitter_du_conferencier'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter conferencier"/></a>
        
              </p>
    
    </div><!-- *** END VIDEOProfile *** -->
    
    <div id="videoTexte">
      
      <p>
      <?php if(get_field('description_conference')) { ?>
        <?php the_field('description_conference'); ?>
      <?php } else { ?>
          Ajouter une description.
      <?php } ?>
      </p>
    
    </div><!-- *** END VideoTexte *** -->
    
    <div id="videoquote">
    
      <cite>
        <?php if(get_field('citation_de_lauteur')) { ?>
        <?php the_field('citation_de_lauteur'); ?>
      <?php } else { ?>
          Ajouter une citation.
      <?php } ?>
      </cite>
    
    </div><!-- *** END VideoQuote *** -->
       
   <hr class="clear"/>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END VIDEOdESCRIPTION *** -->	
  
  <div id="videoAvis">
    <div class="wrapper">
    
    <h2>Discutez et échangez vos avis<br />sur la vidéo conférence <span id="EndSubs">Grâce à Twitter</span></h2>
    
    
    <!--
<?php if(get_field('conference_twitter_hashtag')) { ?>
        <?php the_field('conference_twitter_hashtag'); ?>
      <?php } else { ?>
          Ajouter un shortcode.
      <?php } ?>
-->
    
    
    <a class="button button-blue"
    href="<?php the_field('conference_twitter_hashtag'); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;">Postez un avis
    </a>
    
    
    
    
    </div><!-- *** END WRAPPER *** -->	 
  </div><!-- *** END VideoAvis *** -->
  
  <div id="videoTweet">
    <div id="testo" class="wrapper">
    
    <?php if(get_field('conference_twitter_avis')) { ?>
        <?php the_field('conference_twitter_avis'); ?>
      <?php } else { ?>
          Ajouter un shortcode.
      <?php } ?>
    
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
















