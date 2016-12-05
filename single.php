<?php get_header();?>

<main>
<?php
  if( have_posts() ):
    while( have_posts() ): the_post();?>
      <h2><a href="<? the_permalink(); ?>"> <? the_title(); ?></a></h2>
      <p> <? the_content(); ?></p>

 <?php
    endwhile;
    else :
      echo 'Tidak ada post gan..';
   endif;
  ?>
 </main>

<?php get_footer();?>
