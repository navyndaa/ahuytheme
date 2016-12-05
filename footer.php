    <footer>
      <nav>
      <?
        $args = array ('theme_location' => 'footer_menu');
        wp_nav_menu($args);
      ?>
     </nav>
      &copy; <? bloginfo('name'); echo " - " . date('Y'); ?>
    </footer>

    <? wp_footer(); ?>

  </body>
</html>
