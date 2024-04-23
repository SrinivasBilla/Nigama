<?php
/**
 * Footer Template
 * 
 * @package nigama
 */
?>
</div>
</div>
<div class="container-fluid bg-dark footer py-5 wow fadeIn">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-5 footer-logo">
                <img src="/nigama/wp-content/uploads/2024/03/Nigama-White-Logo.png" />
            <p>We are committed to the development of education and care for those members of our communities who need it the most. We aim to build a more equitable world by delivering dignity one person at a time.</p>
            </div>
            <div class="col-md-3 footer-logo">
            <h4 class="text-white mb-4">Quick Links</h4>
            <?php
    wp_nav_menu(
  array(
    'menu' => 'header-menu',
    'container' => 'li',
    'menu_class'=> 'nav-link',
    'items_wrap' => '%3$s',
    'add_li_class'  => 'footer-links'
  )
);
?>
                </div>
            <div class="col-md-4 footer-logo">
            <h4 class="text-white">GLOBAL HEADQUARTERS</h4>
            <p>687 Lee Road, Suite 250<br>
                Rochester, NY 14606 USA<br>
                +1 (845) 473-1137</p><br>
                <h4 class="text-white">HYDERABAD - INDIA</h4>
                <p>
                Dallas Center, 2nd Floor Office-2<br>
                Knowledge City, Serilingampally (Md)<br>
                RR District, Hyderabad - 500032<br>
                Telangana, India</p>
                  <p class="footer-links"><a href="https://goo.gl/maps/3Lnsw42YeCkVsXjb9" target="_blank">Map &amp; Directions</a></p>                  
            </div>
        </div>
        <div class="text-center text-white copyright mt-5">
          <div class="mt-5">
                Nigama Foundation is a nonprofit entity and collaborates with <a href="https://www.indotronixavani.com/" target="_blank">Indotronix Avani Group</a> Group and <a href="https://www.ceipal.com/" target="_blank">Ceipal</a>.
</div>
    </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>