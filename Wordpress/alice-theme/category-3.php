<?php get_header(); ?>
		
        <!-- header ends here -->
        <div id="content" class="site-content">
            
			<section id="gallery" class="page-section clear" style="background:#f4f4f4;">
                <div class="wrapper">

                    <div class="section-header">
                        <h2 class="section-title">Quais serviços você procura?</h2>
                        <div class="divider"></div>
                    </div>
                    <!-- .section-header -->

                    <div class="section-content col-3">
                        
                    
                    <?php $recent = new WP_Query("cat=1&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                        
                        <?php 
                          global $post;
                          $attch_id = get_post_thumbnail_id( $post->ID );
                          $url = wp_get_attachment_image_src($attch_id, 'full');
                    
                        ?>
                        
                        
                        <article>
                            <div class="gallery-item-wrapper">
                                <div class="featured-image">
                                    <img src="<?php echo $url[0]; ?>" style="min-height:250px;"/>
                                    <div class="overlay"></div>
                                    <div class="hover-effect">
                                        <a href="<?php echo SITEURL;?>/beneficios-do-inss/" class="more-link" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <!-- .featured-image -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo SITEURL;?>/beneficios-do-inss/"><?php the_title() ?></a></h2>
                                    </header>
                                </div>
                                <!-- .entry-container -->
                            </div>
                            <!-- .gallery-item-wrapper -->
                        </article>
                    <?php endwhile;?>    
                        
                    
                    
                    
                    
                    <?php $recent = new WP_Query("cat=3&showposts=2&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                    
                        <?php 
                          global $post;
                          $attch_id = get_post_thumbnail_id( $post->ID );
                          $url = wp_get_attachment_image_src($attch_id, 'full');
                    
                        ?>
                        <article>
                            <div class="gallery-item-wrapper">
                                <div class="featured-image">
                                    <img src="<?php echo $url[0]; ?>" style="min-height:250px;"/>
                                    <div class="overlay"></div>
                                    <div class="hover-effect">
                                        <a href="<?php the_permalink(); ?>" class="more-link" ><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <!-- .featured-image -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                    </header>
                                </div>
                                <!-- .entry-container -->
                            </div>
                            <!-- .gallery-item-wrapper -->
                        </article>
                        
                    <?php endwhile;?>
                    
                    </div>
                    
                    
                    <div class="section-header">
                        <h2 class="section-title">Outras Especialidades</h2>
                        <div class="divider"></div>
                    </div>
                    <!-- .section-header -->

                    <div class="section-content col-3">
                        
                    
                    
                    <?php $recent = new WP_Query("cat=6&showposts=3&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                    
                        <?php 
                          global $post;
                          $attch_id = get_post_thumbnail_id( $post->ID );
                          $url = wp_get_attachment_image_src($attch_id, 'full');
                    
                        ?>
                        <article>
                            <div class="gallery-item-wrapper">
                                <div class="featured-image">
                                    <img src="<?php echo $url[0]; ?>" style="min-height:250px;"/>
                                    <div class="overlay"></div>
                                    <div class="hover-effect">
                                        <a href="<?php the_permalink(); ?>" class="more-link"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <!-- .featured-image -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                    </header>
                                </div>
                                <!-- .entry-container -->
                            </div>
                            <!-- .gallery-item-wrapper -->
                        </article>
                        
                    <?php endwhile;?>
                    
                    </div>
                    
                    
                </div>
            </section>
			

            
        </div>
<?php get_footer(); ?>