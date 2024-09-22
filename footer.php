<?php
/**
 * Author: Pragyandeep Mohanty
 * Contains closing tags for body and html, and includes dynamic footer content.
 *
 * @package TestTheme
 */
?>
<footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>&copy; <span><?php esc_html_e( 'Copyright', 'testtheme' ); ?></span> <strong class="px-1 sitename"><?php bloginfo( 'name' ); ?></strong> <span><?php esc_html_e( 'All Rights Reserved', 'testtheme' ); ?></span></p>
    </div>

</footer>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
</body>
</html>
