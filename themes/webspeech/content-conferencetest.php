
          <div class="listeConfVideoItem" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            
            
            <a class="lienConfImg" href="<?php echo get_permalink(); ?>">
            
            <?php if(get_field('image_description_conference')) { ?>
    					<img src="<?php the_field('image_description_conference'); ?>" alt="" />
    				<?php } ?>
            
            </a>
            
            
          
              <h3>
                <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
                <span>
                  <?php if(get_field('duree_de_la_conference')) { ?>
            			<?php the_field('duree_de_la_conference'); ?>
                  <?php } else { ?>
            			<span>Ajouter une durée.</span>
                  <?php } ?>              
                </span>
              </h3>
              
              <p class="ListeConfBy">
              <strong>Par 
                <?php if(get_field('conference_par')) { ?>
            		  <?php the_field('conference_par'); ?>
                <?php } else { ?>
            			Ajouter un conférencier.
                <?php } ?>
                </strong> le
               <?php if(get_field('date_de_la_conference')) { ?>
               	<?php the_field('date_de_la_conference'); ?>
               <?php } else { ?>
               	Ajouter une date.
               <?php } ?></p>
            
            
            <p class="ListeConfTexte">
              <?php if(get_field('extrait_description_de_la_conference')) { ?>
               	<?php the_field('extrait_description_de_la_conference'); ?>
               <?php } else { ?>
               	Ajouter une description.
               <?php } ?>
            </p>
            
            <?php the_category(); ?>
        		
        		
        		<!--
<p class="listeConfTag">
        		  <a href="#fakelink" class="btn btn-xs btn-primary mhm">Front-end</a>
        		  <a href="#fakelink" class="btn btn-xs btn-primary mhm">Design</a>
        		  <a href="#fakelink" class="btn btn-xs btn-primary mhm">UX</a>
        		</p>
-->
        		<hr class="clear"/>
            
          </div><!-- *** END ListeConfVideoItem *** -->	   
          
         




