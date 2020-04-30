		<?php get_header(); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div id="content" class="site-content container clearfix">
		                <div id="primary" class="content-area">
		                    <main id="main" class="site-main" role="main">
		                        <article id="post-132" class="init-animate post-132 post type-post status-publish format-standard has-post-thumbnail hentry category-hair animated" style="visibility: visible;">
	                               <div class="content-wrapper">
		                                <div class="single-feat clearfix" style="margin-top:50px;">
		                                    
		                                </div>
		                                <div class="entry-content ">
		                                	<p><?php the_content(); ?></p>
		                               </div><!-- .entry-content -->
                        	       </div>
                               </article><!-- #post-## -->
                               <div class="clearfix"></div>
			
<!-- #comments -->		</main><!-- #main -->
	</div><!-- #primary -->
	    <div id="secondary-right" class="at-fixed-width widget-area sidebar secondary-sidebar" role="complementary">
        <div id="sidebar-section-top" class="widget-area sidebar clearfix">
            
            
            
					  </div>
    </div>
</div>
					
					
					
					
					
					
				<?php endwhile; else: ?>
				<?php endif; ?>
		
		<?php get_footer(); ?>
        
        