<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>

  <body>

    <header>
      <h1><a href="<? echo home_url(); ?>"> <? bloginfo('name');?> </a></h1>
      <h2><? bloginfo('description');?></h2>

      <nav>
      <?
        $args = array ('theme_location' => 'main_menu');
        wp_nav_menu($args);
      ?>
      </nav>
    </header>
