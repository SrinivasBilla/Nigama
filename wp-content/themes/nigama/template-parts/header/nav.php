<?php
/**
 * Navgation Template
 * 
 * @package nigama
 */
?>       
              


<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
<div class="container">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
        <?php
        if( function_exists ( 'the_custom_logo') ) {
            the_custom_logo();
        }; ?>
        
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php
    wp_nav_menu(
  array(
    'menu' => 'header-menu',
    'container' => 'li',
    'menu_class'=> 'nav-link',
    'items_wrap' => '%3$s',
    'add_li_class'  => 'nav-link'
  )
);
?>
            </div>
           
        </div>
        </div>
    </nav>

