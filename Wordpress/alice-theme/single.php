		<?php get_header(); ?>
		
		
        <div id="content" class="site-content">
            <div id="page-site-header" style="background-image: url('<?php echo TEMPLATEURL;?>/img/banner-direito.jpg');">
                <header class='page-header'>
                    <div class="wrapper">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h1 class="page-title"><?php the_title() ?></h1> </div>
                        <?php endwhile; else: ?>
			            <?php endif; ?>
                    <!-- .wrapper -->
                </header>
            </div>
            <!-- #page-site-header -->
            <div class="wrapper page-section">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <article id="post-5" class="post-5 page type-page status-publish hentry">
                            <div class="entry-content">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                    <?php 
                                      global $post;
                                      $attch_id = get_post_thumbnail_id( $post->ID );
                                      $url = wp_get_attachment_image_src($attch_id, 'full');
                                
                                    ?>
                                    
                                    <figure class="wp-block-image"><img src="" alt="" class="wp-image-76" srcset="<?php echo $url[0]; ?>" /></figure>

                                    <?php the_content(); ?>
                               
                                <?php endwhile; else: ?>
			                	<?php endif; ?>
                            
                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- #post-## -->

                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->

                <aside id="secondary" class="widget-area" role="complementary">
                    <aside id="search-2" class="widget widget_search">
                        <a href="<?php echo SITEURL;?>/contato" target="_blank" id="botaocliqueaqui" style="color:#fff;">
                            Clique aqui e saiba mais
                        </a>
                    </aside>
                    
                    <aside id="recent-posts-2" class="widget widget_recent_entries">
                        <h2 class="widget-title">Posts Recentes</h2>
                        
                        <ul>
                            <?php $recent = new WP_Query("cat=3&showposts=2&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile;?>
                            <?php $recent = new WP_Query("cat=4&showposts=2&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile;?>
                        </ul>
                        
                        
                    </aside>
                    
                </aside>
                <!-- #secondary -->
            </div>
        </div>
		
		
		<?php get_footer(); ?>
		