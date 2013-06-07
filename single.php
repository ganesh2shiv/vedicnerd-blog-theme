<?php get_header(); ?>





<div id="coreContent">





	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>








      <div class="post single hentry">


        <div class="postContent">


          <h3 class="entry-title"><?php the_title(); ?></h3>


          <h4 class="meta"><?php the_time('l, F jS, Y') ?> at <?php the_time('g:i a'); ?></h4>


          <div class="entry-content">


              <?php the_content(); ?>


          </div>


        </div>


      </div>





      <?php 


      /*


      <div class="googleAd">


        


        <!-- You Ad Code Here -->





      </div>


      */


      ?>


      


	<?php comments_template(); ?>





  <div class="pageNav">


    <div class="prev"><?php previous_post_link('%link', '&laquo; Previous Post'); ?></div>


    <div class="next"><?php next_post_link('%link', 'Next Post &raquo;') ?></div>


  </div>








	<?php endwhile; else: ?>





		<p>Sorry, no posts matched your criteria.</p>





<?php endif; ?>





</div>








<?php get_footer(); ?>


