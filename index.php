<?php get_header();?>

<main>
<?php
  if( have_posts() ):
    while( have_posts() ): the_post();?>
      <h2><a href="<? the_permalink(); ?>"> <? the_title(); ?></a></h2>
      <p>
        <? echo get_the_excerpt(); ?> <a href="<? the_permalink();?>">Baca Kuy..</a>
      </p>

 <?php
    endwhile;
    else :
      echo 'Tidak ada post gan..';
   endif;
  ?>
 </main>

<?php get_footer();?>
