<?php get_header(); ?>
		
        <!-- header ends here -->
        <div id="content" class="site-content">
            
			<section id="blog" class="blog-posts-wrapper page-section">
                <div class="wrapper">

                    <div class="section-header">
                        <h1 class="section-title">Nossos Artigos</h1>
                        <div class="divider"></div>
                    </div>
                    <!-- .section-header -->
                    <div class="section-content col-3">

                        <?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                            <article>
                                <div class="post-item">
                                    <div class="entry-container">
                                        
                                        <!-- .entry-meta -->
    
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                							</h2>
                                        </header>
    									
    									<div class="entry-meta">
                                            <span class="date"><a href="<?php the_permalink(); ?>" rel="bookmark"><time class="entry-date published updated" datetime="2018-12-11T04:01:54+00:00"><?php the_time(' j' ); ?> de <?php the_time('F' ); ?> de <?php the_time('Y' ); ?></time></a></span> </div>
    
                                        <div class="entry-content">
                                            <p><?php limit_chars($post->post_content, $length=200); ?></p>
                                        </div>
                                        <!-- .entry-content -->
    
                                        <a href="<?php the_permalink(); ?>" class="btn">Leia Mais</a>
                                    </div>
                                    <!-- .entry-container -->
                                </div>
                                <!-- .post-item -->
                            </article>
						<?php endwhile;?>
						
						
						<?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                            <article>
                                <div class="post-item">
                                    <div class="entry-container">
                                        
                                        <!-- .entry-meta -->
    
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                							</h2>
                                        </header>
    									
    									<div class="entry-meta">
                                            <span class="date"><a href="<?php the_permalink(); ?>" rel="bookmark"><time class="entry-date published updated" datetime="2018-12-11T04:01:54+00:00"><?php the_time(' j' ); ?> de <?php the_time('F' ); ?> de <?php the_time('Y' ); ?></time></a></span> </div>
    
                                        <div class="entry-content">
                                            <p><?php limit_chars($post->post_content, $length=200); ?></p>
                                        </div>
                                        <!-- .entry-content -->
    
                                        <a href="<?php the_permalink(); ?>" class="btn">Leia Mais</a>
                                    </div>
                                    <!-- .entry-container -->
                                </div>
                                <!-- .post-item -->
                            </article>
						<?php endwhile;?>
						
						
                        <?php $recent = new WP_Query("cat=4&showposts=1&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                            <article>
                                <div class="post-item">
                                    <div class="entry-container">
                                        
                                        <!-- .entry-meta -->
    
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                							</h2>
                                        </header>
    									
    									<div class="entry-meta">
                                            <span class="date"><a href="<?php the_permalink(); ?>" rel="bookmark"><time class="entry-date published updated" datetime="2018-12-11T04:01:54+00:00"><?php the_time(' j' ); ?> de <?php the_time('F' ); ?> de <?php the_time('Y' ); ?></time></a></span> </div>
    
                                        <div class="entry-content">
                                            <p><?php limit_chars($post->post_content, $length=200); ?></p>
                                        </div>
                                        <!-- .entry-content -->
    
                                        <a href="<?php the_permalink(); ?>" class="btn">Leia Mais</a>
                                    </div>
                                    <!-- .entry-container -->
                                </div>
                                <!-- .post-item -->
                            </article>
						<?php endwhile;?>
                        
                    </div>
                </div>
            </section>
			

            
        </div>
<?php get_footer(); ?>