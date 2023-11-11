    <footer class="main-footer">
        <p><?php bloginfo("name") ?> - &#169; - <script type="text/javascript">document.write(new Date().getFullYear()); </script></p>
        <?php wp_nav_menu(array("theme_location" => "footer_menu", "menu_class" => "navi")); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>