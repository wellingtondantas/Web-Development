<?php bloginfo( 'name' ); ?>

<title>
    <?php
        if ( is_single() ) { 
            single_post_title(); echo ' - '; bloginfo( 'name' );
            
        }elseif ( is_home() || is_front_page() ) { 
            bloginfo('name'); echo ' - '; bloginfo('description'); 
            
        }elseif ( is_page() ) { 
            single_post_title(''); echo ' - '; bloginfo( 'name' );
            
        }elseif ( is_search() ) { 
            bloginfo('name'); print ' - Resultados para ' . wp_specialchars($s); get_page_number(); 
            
        }elseif ( is_404() ) { 
            bloginfo('name'); print ' - Nada encontrado'; 
            
        }else { 
            bloginfo( 'name' ); echo ' - '; bloginfo('description');
            
        }
    ?>
</title>

<?php bloginfo('template_url'); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

<?php bloginfo('description'); ?>
<meta name="description" content="<?php bloginfo('description'); ?>"/>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>


<?php wp_nav_menu(array('menu' => 'Nome do Menu', 'container' => 'nav', 'container_class' => 'menu-header-menu-container','menu_class' => 'menu-header-menu')); ?>

exemplo:

<div id="site-navigation" class="main-navigation">
    <nav class="menu-header-menu-container">
       <ul id="menu-menu-destaque" class="menu-header-menu">
          <li id="menu-item-478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-478">
             <a>Página Inicial</a></li>












