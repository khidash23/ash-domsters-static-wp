<?php get_header(); ?>

  <div id="content">
         <!-- tbs class for headers -->
         <div class="page-header">
           <!-- the_title() is WP function that shows the title of the post -->
           <!-- <h1><?php the_title(); ?></h1> -->
         </div>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

           <article class="post">
             <h2 class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
             <!-- date() only shows date for post on that day, time() function better here -->
             <!-- add name in users section of Dashboard to offer better name display -->
             <p>
               <em>
                 <!-- By <?php the_author(); ?> -->
                <?php echo the_time('l, F jS, Y'); ?>
                <!-- in <?php the_category( ', ' ); ?>
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>-->
                </em>
             </p>
             <?php the_excerpt(); ?>
             <hr>
           </article>
          <!-- WP function that outputs post content -->
          <?php endwhile; else: ?>
            <!-- we run this else if there is no content -->
           <div class="page-header">
             <h1>Wups!</h1>
           </div>

           <p>Looks like we have no content for this page?</p>

         <?php endif; ?>

  </div>

<?php get_footer(); ?>
