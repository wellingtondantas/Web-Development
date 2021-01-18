Loop tradicional 1
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
[conteúdo]
<?php endwhile; else: ?>
<p><?php _e('Nada encontrado'); ?></p>
<?php endif; ?>

Loop tradicional 2
<?php $postCategoria = new WP_Query("cat=6&showposts=6&offset=0"); while($postCategoria->have_posts()) : $postCategoria->the_post();?>
[Conteúdo]
<?php endwhile;?>


Loop tradicional 3
<?php
    $id_do_post = 430;
    $conteudo_id = get_post($id_do_post);
?>

Exemplo:
<?php echo $conteudo_id->post_title ;?>// título