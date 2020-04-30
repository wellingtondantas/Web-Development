		<?php get_header(); ?>
        		
            	<div id="category">
					<!-- INICIO DAS DIVS CAIXAINTEIRA -->
					<div class="caixainteira">
						<h1 style="font-size:22px; text-transform:uppercase;"><span style="color:#c73133; font-size:22px; text-transform:uppercase;">//</span>Pesquisas relacionadas</h1>
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="caixainteira">
							<strong style="font-size:20px; text-transform:uppercase;"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></strong>
							<p><?php limit_chars($post->post_content, $length=400); ?></p>
						</div>
							
					<?php endwhile; else: ?>
					<?php endif; ?>
						
					<!-- FIM DA DIVS CAIXAINTEIRA-->	
				</div>
				
		<?php get_footer(); ?>