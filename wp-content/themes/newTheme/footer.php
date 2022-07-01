<footer class="">
	<p style="" class="mainFooter">Copyright &#169; - <script>document.write(new Date().getFullYear());</script> By <a href="https://about.me/farazhashmi">Developer Faraz Hashmi</a></p>
	<nav class="navbar navbar-expand-sm justify-content-center">
  <?php
  		$defaults = array(
        'menu'                 => '',
        'container'            => '',
        'container_class'      => '',
        'container_id'         => '',
        'container_aria_label' => '',
        'menu_class'           => 'menu navbar-nav',
        'menu_id'              => '',
        'echo'                 => true,
        'fallback_cb'          => 'wp_page_menu',
        'before'               => '',
        'after'                => '',
        'link_before'          => '',
        'link_after'           => '',
        'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'         => 'preserve',
        'depth'                => 0,
        'walker'               => '',
        'theme_location'       => 'extra-menu' 
      );
        wp_nav_menu($defaults);
        ?>
        </nav>
</footer>
<?php
  wp_footer();
  ?>
</body>
</html>