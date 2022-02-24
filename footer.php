<!-- footer -->
<footer class="footer">
    <div class="container">
      <a class="phone" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
      <div class="footer__email">
      <?php the_field('footer__email'); ?>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>