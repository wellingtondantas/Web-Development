		<?php get_header(); ?>
		<?php
		/* Template Name: CONTATO */
		?>
		
		
        <div id="content" class="site-content">
            <div id="page-site-header" style="background-image: url('<?php echo TEMPLATEURL;?>/img/banner-direito.jpg');">
                <header class='page-header'>
                    <div class="wrapper">
                        <h1 class="page-title">Nosso Contato</h1> </div>
                    <!-- .wrapper -->
                </header>
            </div>
            <!-- #page-site-header -->
            <div class="wrapper page-section">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <article id="post-13" class="post-13 page type-page status-publish hentry">
                            <div class="entry-content">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <div class="entry-container">

                                        <?php the_content(); ?>
                                    
                                    <!-- .entry-content -->

                                    <!-- .read-more -->
                                    </div>
                                <!-- .entry-container -->
                                <?php endwhile; else: ?>
			                    <?php endif; ?>
				                    
                                
                                <p></p>
                                
                                
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
                        <form role="search" method="get" class="search-form" action="">
                            <label>
                                <span class="screen-reader-text">Pesquisar por:</span>
                                <input type="search" class="search-field" placeholder="Pesquisar ..." value="" name="s" title="Search for:" />
                            </label>
                            <button type="submit" class="search-submit" value="Search"><i class="fa fa-search"></i></button>
                        </form>
                    </aside>
                    
                    <aside id="recent-posts-2" class="widget widget_recent_entries">
                        <h2 class="widget-title">Posts Recentes</h2>
                        
                        <ul>
                            <?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile;?>
                            
                            <?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </li>
                            <?php endwhile;?>
                            
                            <?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
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
		