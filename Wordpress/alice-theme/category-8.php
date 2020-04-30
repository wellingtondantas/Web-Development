<?php get_header(); ?>
		
        <!-- header ends here -->
        <div id="content" class="site-content">
            
            <div id="page-site-header" style="background-image: url('<?php echo TEMPLATEURL;?>/img/banner-direito.jpg');">
                <header class='page-header'>
                    <div class="wrapper">
                        <h1 class="page-title" style="text-align:center; width:100%;">Benefícios do INSS</h1>
                           
                    </div>
                    <!-- .wrapper -->
                </header>
            </div>
            
			<section id="gallery" class="page-section clear" style="background:#f4f4f4;">
                <div class="wrapper">
                    
                    <div class="section-header">
                        
                        <span style="text-align:center; font-size:20px;">A <strong>Previdência Social</strong> é uma espécie de seguradora que garante aos seus
                        contribuintes e seus familiares algumas coberturas quando existe a ocorrência de algum evento que lhes impeça de garantir o próprio sustento ou de sua
                        família. Essas coberturas são chamadas de <strong>benefícios</strong>. Dessa forma, são disponibilizados aos segurados benefícios para eventos como morte, velhice,
                        invalidez, prisão e gravidez. Para garantir que se esteja “coberto” por esse seguro, o segurado precisará realizar suas contribuições para a seguradora
                        (INSS). <strong>Conheça os principais benefícios do INSS</strong></span>
                         
                    </div>

                    <!-- .section-header -->

                    <div class="section-content col-3">
                        
                    
                    
                    <?php $recent = new WP_Query("cat=8&showposts=30&offset=0"); while($recent->have_posts()) : $recent->the_post();?>
                    
                        <?php 
                          global $post;
                          $attch_id = get_post_thumbnail_id( $post->ID );
                          $url = wp_get_attachment_image_src($attch_id, 'full');
                    
                        ?>
                        <article>
                            <div class="gallery-item-wrapper">
                                <div class="featured-image">
                                    <?php if ($url[0]==""): ?>
                                        <img src="<?php echo TEMPLATEURL;?>/img/noimg.png" style="min-height:200px;"/>
                                     <?php else: ?>
                                        <img src="<?php echo $url[0]; ?>" style="min-height:200px;"/>
                                     <?php endif; ?>
                                </div>
                                <!-- .featured-image -->
                                <div class="entry-container">
                                    <header class="entry-header">
                                        <h2 class="entry-title" style="text-align:center;"><?php the_title() ?></h2>
                                        <p style="text-align:center;"><?php the_content() ?></p>
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