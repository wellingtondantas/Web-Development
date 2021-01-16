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