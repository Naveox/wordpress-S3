<footer class="footer">
  <div class="container">
     <nav class="secondary-menu">
      <?php
        wp_nav_menu( array('theme_location' => 'nav_xxx') );
      ?>
    </nav>
    <p>&copy; <?php echo __('Tous droits réservés'); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

