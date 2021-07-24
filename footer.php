  <footer class="py-5">

    <div class="container">
      <p class="m-0 text-center text-white"><?php esc_html_e( 'Copyright', 'bb' ) ?> &copy; <?php if ( get_theme_mod( 'bb_footer_txt' ) ) { echo get_theme_mod( 'bb_footer_txt' ); } else { esc_html_e( 'Nome da sua marca', 'bb' ); }  ?> <?php esc_html_e('- ', 'bb') ?><?php echo get_the_date('Y'); ?></p>
    </div>

  </footer>

  <?php wp_footer(); ?>
  
</body>
</html>