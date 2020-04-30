<?php get_header(); ?>
		
        <!-- header ends here -->
        <div id="content" class="site-content">
            
            
            <section id="featured-slider">
                <div class="featured-slider-wrapper" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": false }'>
                            
                    <?php $recent = new WP_Query("cat=2&showposts=4&offset=0"); while($recent->have_posts()) : $recent->the_post();?> 
                    
                    <?php 
                      global $post;
                      $attch_id = get_post_thumbnail_id( $post->ID );
                      $url = wp_get_attachment_image_src($attch_id, 'full');
                
                    ?>
                            
                    <article class="slick-item display-none" style="background-image: url('<?php echo $url[0]; ?>');">
                        <div class="overlay" style="opacity: 0.6;"></div>
                        <div class="wrapper">

                            <div class="featured-content-wrapper">
                                <header class="entry-header">
                                    <h2 id="log" class="entry-title"><?php the_title() ?></h2>
                                </header>
                                <div class="entry-content">
                                    <?php limit_chars($post->post_content, $length=200); ?></div>
                                <!-- .entry-content -->

                                <div class="read-more">
                                    <a href="<?php echo get_post_meta($post->ID, 'ecpt_linkbanner', true); ?>" class="btn btn-primary">SIM, QUERO SABER MAIS!</a>
                                </div>
                                <!-- .read-more -->

                            </div>
                            <!-- .featured-content-wrapper -->
                        </div>
                        <!-- .wrapper -->
                    </article>
                    <!-- .slick-item -->
                
                    <?php endwhile;?>
                
                    <!-- .slick-item -->
                </div><!-- .featured-slider-wrapper -->
            </section>
			
			<section id="gallery" class="page-section clear">
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

			
			
			<section id="escritadinamicadiv">
				<div id="main" class="all_colors" data-scroll-offset="116">

            <div id="av_section_1" class="avia-section main_color avia-section-large avia-no-border-styling  avia-bg-style-scroll  avia-builder-el-0  el_before_av_section  avia-builder-el-first   container_wrap fullsize" style="background-color: #d89627; background-image: linear-gradient(#d89627,#d89627); ">
                <div class="av-section-color-overlay-wrap">
                    <a href="#next-section" title="" class="scroll-down-link " aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></a>
                    <div class="container">
                        <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                            <div class="post-entry post-entry-type-page post-entry-20">
                                <div class="entry-content-wrapper clearfix">
                                    <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_three_fifth  avia-builder-el-first  " style="border-radius:0px; padding:40px 0px;" ></div>
                                    
                                    <?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
		                            <?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
                    
                                    
									<div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-2  el_after_av_one_fifth  el_before_av_one_fifth  " style="border-radius:0px; z-index:200">
                                        <div style="text-align:center; color:#ffffff; font-size:5vw; margin:40px 0 0 0; " class="bannerpalavra av-rotator-container av-rotation-container-center   avia-builder-el-3  el_before_av_hr  avia-builder-el-first  av-fixed-rotator-width av-typewriter" data-interval="3" data-animation="typewriter" data-fixWidth="1">
                                            <h2 class="av-rotator-container-inner section-title" style="color:#fff;"><?php echo get_post_meta($post->ID, 'ecpt_nomeprincipal', true); ?><span class="av-rotator-text av-rotator-multiline-off ">
												<span  class="av-rotator-text-single av-rotator-text-single-1"><?php echo get_post_meta($post->ID, 'ecpt_primeirafrase', true); ?></span>
												<span  class="av-rotator-text-single av-rotator-text-single-2"><?php echo get_post_meta($post->ID, 'ecpt_segundafrase', true); ?></span>
												<span  class="av-rotator-text-single av-rotator-text-single-3"><?php echo get_post_meta($post->ID, 'ecpt_terceirafrase', true); ?></span>
												</span>
											</h2>
										</div>
                                        <div style="height:25px" class="hr hr-invisible   avia-builder-el-4  el_after_av_headline_rotator  el_before_av_textblock "><span class="hr-inner "><span class="hr-inner-style"></span></span>
                                        </div>
										
                                        <section class="av_textblock_section " itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                            <div class="avia_textblock  av_inherit_color  av-small-font-size-overwrite av-small-font-size-15 av-mini-font-size-overwrite av-mini-font-size-14" style="font-size:16px; color:#ffffff; " itemprop="text">
                                                <p style="text-align: center; color:#fff; font-size:20px;"><?php echo get_post_meta($post->ID, 'ecpt_textodobanner', true); ?></p>
                                            </div>
                                        </section>
										
                                        <div style="height:25px" class="hr hr-invisible   avia-builder-el-6  el_after_av_textblock  el_before_av_button "><span class="hr-inner "><span class="hr-inner-style"></span></span>
                                        </div>
										
                                        <div class="avia-button-wrap avia-button-center  avia-builder-el-7  el_after_av_hr  avia-builder-el-last " title="Fale Conosco" style="color:#d89627; z-index:200;"><a href="<?php echo get_post_meta($post->ID, 'ecpt_linkdobannerdinmico', true); ?>" class="avia-button   avia-icon_select-no avia-color-light avia-size-large avia-position-center " style="color:#d89627; z-index:200;"><span class="avia_iconbox_title" style="color:#d89627; z-index:200; font-size:30px; font-family: 'Raleway', sans-serif;">Fale Conosco</span></a></div>
                                    
									</div>
									
									<?php endwhile; ?>
		                            <?php wp_reset_postdata(); ?>
									
                                    <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-8  el_after_av_three_fifth  el_before_av_codeblock  " style="border-radius:0px; "></div>
                                    <section class="fundoescrita" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                        <div class="avia_codeblock " itemprop="text">
                                            <div id="particles-js"></div>
                                        </div>
                                    </section>

                                </div>
                            </div>
                        </main>
                        <!-- close content main element -->
                    </div>
                </div>
            </div>
			</section>
			
			<section id="blog" class="blog-posts-wrapper page-section">
                <div class="wrapper">

                    <div class="section-header">
                        <h2 class="section-title">Nossos Artigos</h2>
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