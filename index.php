<?php get_header(); ?>





    <div id="coreContent" class="hfeed">


      


    	<?php if (have_posts()) : ?>





    		<?php while (have_posts()) : the_post(); ?>





      <div class="post hentry">


        <div class="postContent">


          <h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>


    <h4 class="vcard author"><?php the_time('l, F jS, Y') ;?> | Filed under: <?php the_category(' '); ?> | <?php comments_popup_link('Leave a comment', '1 comment.', '% comments') ;?></h4>
          <div class="entry-content">





         <?php the_content('Read the rest of this entry &raquo;'); ?>




          </div>


        </div>


      </div>





		<?php endwhile; ?>





    <div class="pageNav">


      <div class="prev"><?php next_posts_link('&laquo; Older') ?></div>


      <div class="next"><?php previous_posts_link('Newer &raquo;') ?></div>


    </div>





	<?php else : ?>





		<h2>Not Found</h2>


		<p>Sorry, but you are looking for something that isn't here.</p>





	<?php endif; ?>





  </div>








<?php get_footer(); ?>


