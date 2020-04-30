		<?php get_header(); ?>
		<?php
		/* Template Name: ESCRITORIO */
		?>
		
		
        <div id="content" class="site-content">
            <div id="page-site-header" style="background-image: url('<?php echo TEMPLATEURL;?>/img/banner-direito.jpg');">
                <header class='page-header'><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
                    <div class="wrapper">
                        <h1 class="page-title">Nosso Escrit&oacute;rio</h1> </div>
                    <!-- .wrapper -->
                </header>
            </div>
            <!-- #page-site-header -->
                
                <section id="featured-courses" class="page-section">
                    <div class="wrapper">
    
                        <!-- .section-header -->
                        <div class="section-content">
    
                            <article>
                                <div class="course-item-wrapper">
                                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    
                                    <?php 
                                      global $post;
                                      $attch_id = get_post_thumbnail_id( $post->ID );
                                      $url = wp_get_attachment_image_src($attch_id, 'full');
                                
                                    ?>
                                    
                                    <div class="featured-image" style="background-image: url('<?php echo $url[0]; ?>');">
                                    </div>
                                    <!-- .featured-image -->
    
                                    <div class="entry-container">
    
                                            <?php the_content(); ?>
                                        
                                        <!-- .entry-content -->
    
                                        <!-- .read-more -->
                                    </div>
                                    <!-- .entry-container -->
                                    <?php endwhile; else: ?>
				                    <?php endif; ?>
                                </div>
                                <!-- .course-item-wrapper -->
                            </article>
                        </div>
                    </div>
                </section>
                
                <section id="testimonial" class="page-section" style="background-image: url('<?php echo TEMPLATEURL;?>/img/lawoffice-law.jpg');">

                <div class="overlay" style="opacity: 0.8;"></div>
                <div class="wrapper">
                    <div class="section-header">
                        <h2 class="section-title">Especialidades</h2>
                        <div class="divider"></div>
                    </div>
                    <!-- .section-header -->
                    <div class="testimonial-slider-wrapper" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite": true, "speed": 800, "dots": true, "arrows":false, "autoplay": true, "fade": false }'>
                        
                        
                        
                            <article class="slick-item">
                                <div class="featured-image">
    
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php echo SITEURL;?>/beneficios-do-inss/">Direito Previdenciário</a></h2>
                                    </header>
                                </div>
                                <!-- .featured-image -->
    
                                <div class="entry-content">
                                    <p>A Previdência Social é uma espécie de seguradora que garante aos seus contribuintes e seus familiares algumas coberturas quando existe a ocorrência de algum evento</p>
                                </div>
                                <!-- .entry-content -->
                            </article>
                        
                        
                        <?php $recent = new WP_Query("cat=6&showposts=3&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                            <article class="slick-item">
                                <div class="featured-image">
    
                                    <header class="entry-header">
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                    </header>
                                </div>
                                <!-- .featured-image -->
    
                                <div class="entry-content">
                                    <p><?php limit_chars($post->post_content, $length=200); ?></p>
                                </div>
                                <!-- .entry-content -->
                            </article>
                        <?php endwhile;?>    
                            
                    </div>
                    <!-- .testimonial-slider-wrapper -->
                </div>
                <!-- .wrapper -->

            </section>
            
            <section id="gallery" class="page-section clear" style="background:#fff;">
                <div class="wrapper">

                    <div class="section-header">
                        <h2 class="section-title">Al&eacute;m do Escrit&oacute;rio Digital, temos as seguintes filiais: </h2>
                        <div class="divider"></div>
                    </div>
                    <!-- .section-header -->

                    <div class="section-content col-3">
                    
                    <?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
                    	<?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
	
                    <div class="wp-block-columns has-4-columns">
                    <div class="wp-block-column">
                    <strong>MATRIZ: Fortaleza/CE:</strong>
                    <p><? echo get_post_meta($post->ID, 'ecpt_matrizi', true); ?></p>
                    </div>
                    
                    
                    
                    <div class="wp-block-column">
                    <strong>Filial 01: Teresina/PI:</strong>
                    <p><? echo get_post_meta($post->ID, 'ecpt_filiali', true); ?></p>
                    </div>
                    
                    
                    
                    <div class="wp-block-column">
                    <strong>Filial 02: São Luís/MA:</strong>
                    <p><? echo get_post_meta($post->ID, 'ecpt_filialii', true); ?></p>
                    </div>
                    
                    
                    
                    <div class="wp-block-column">
                    <strong>Filial 03: Timon/MA:</strong>
                    <p><? echo get_post_meta($post->ID, 'ecpt_filialiii', true); ?></p>
                    </div>
                    </div>
                    
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    
                    
                    
                        

                    </div>
                </div>
            </section>

                
        </div>
		
		
		<?php get_footer(); ?>
		