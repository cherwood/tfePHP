<?php /*
	Template Name: Contact
*/ ?>

<?php get_header(); ?>


  
  <div id="contact">
   <div class="wrapper">
   
  		<h2>Nous contacter</h2>
  		<p class="intro-p">Vous souhaitez proposer une vidéo conférence ou simplement poser une question, envoyez-nous un message via le formulaire ci-dessous ou par <a href="mailto:webspeech.fr@gmail.com">email</a>.</p>
  		<p class="intro-p intro-contact">Il existe une <a href="#seefaq">FAQ</a> qui pourrait répondre à certaines de vos questions.</p>
  		
  		<?php echo do_shortcode('[ninja_forms_display_form id=2]'); ?>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END DECOUVREZ *** -->	  
  
  <div id="seefaq">
   <div class="wrapper">
   
  		<h2>Questions fréquemment posées</h2>
  		<p class="intro-p">Si vous avez une question, rencontrez un problème, une réponse se trouve sûrement ci-dessous.</p>
  		
  		<div class="alert alert-info">
        <h4>Faut-il avoir un compte Twitter pour donner son avis? </h4>
        <p>Oui, c’est essentiel étant donné que tous les avis sont relié à votre compte Twitter personnel afin que les autres visiteurs du site puissent interagir avec vous. Sans compte il est donc impossible de publier des avis.</p>
      </div>
  		<div class="alert alert-info">
        <h4>Ma conference est diffusée à mon inssu, que faire?</h4>
        <p>Vous pouvez prendre contact avec l’équipe via la page contact afin que la vidéo soie retirée du site. </p>
      </div>
      
  		
  		<hr class="clear"/>
   
   </div><!-- *** END WRAPPER *** -->	   
  </div><!-- *** END DECOUVREZ *** -->	  
  
  
     
  <div class="push"></div>    
   
<?php get_footer(); ?>
















