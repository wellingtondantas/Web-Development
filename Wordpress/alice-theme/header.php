<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>
        <?php
		if ( is_front_page() )
		{
		echo WP_NAME;
		echo ' - '; //separador
		bloginfo('description');
		}
		else // nao eh pagina inicial
		{
		if (is_author() || is_404() || is_search() || is_page() || is_single()) {
		if (!is_category()) {
		echo get_the_title();
		}
		if (is_category()) {
		$category = get_the_category();
		echo $category[0]->cat_name;
		}
		$post_ancestors = get_post_ancestors($post->ID);
		$post_ancestors = array_reverse($post_ancestors);
		if ($post_ancestors[0]) {
		$titulo_novo0 = ' « '.get_the_title($post_ancestors[0]);
		}
		if ($post_ancestors[1]) {
		$titulo_novo1 = ' « '.get_the_title($post_ancestors[1]);
		}
		if ($post_ancestors[2]) {
		$titulo_novo2 = ' « '.get_the_title($post_ancestors[2]);
		}
		if ($post_ancestors[3]) {
		$titulo_novo3 = ' « '.get_the_title($post_ancestors[3]);
		}
		if ($post_ancestors[4]) {
		$titulo_novo4 = ' « '.get_the_title($post_ancestors[4]);
		}
		if ($titulo_novo4) {
		echo $titulo_novo4;
		} else {
			if ($titulo_novo3) {
				echo $titulo_novo3;
			} else {
				if ($titulo_novo2) {
					echo $titulo_novo2;
				} else {
					if ($titulo_novo1) {
						echo $titulo_novo1;
					} else {
						if ($titulo_novo0) {
							echo $titulo_novo0;
						}
					}
				}
			}
		}
		}
		if (is_archive()) {
		wp_title( '', true, 'left' );
		}
		if ( is_search() ) {
		_e('Resultado da pesquisa por ->', 'RB');  /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(' '); echo $key; _e(' - '); echo $count . ' ';
		_e('Páginas', 'RB'); wp_reset_query(); } 
		if ( is_404() ) {
		_e('Erro 404 - Página Não Encontrada', 'RB');
		}
		if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
		echo __('Page') . ' ' . get_query_var('paged');
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
		}
		echo ' | '.WP_NAME;
		}
		?>
        
    </title>

    <!-- This site is optimized with the Yoast SEO plugin v13.2 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="https://alicearagao.com.br" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Alice Aragão Advocacia" />
    <meta property="og:url" content="https://alicearagao.com.br" />
    <meta property="og:site_name" content="Alice Aragão Advocacia" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Alice Aragão Advocacia" />
    
    <script type="application/ld+json" class="yoast-schema-graph yoast-schema-graph--main">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://creativthemes.com/theme-demo/buziness-pro/#website","url":"https://creativthemes.com/theme-demo/buziness-pro/","name":"Buziness Pro","inLanguage":"en-US","potentialAction":{"@type":"SearchAction","target":"https://creativthemes.com/theme-demo/buziness-pro/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"WebPage","@id":"https://creativthemes.com/theme-demo/buziness-pro/#webpage","url":"https://creativthemes.com/theme-demo/buziness-pro/","name":"Home - Buziness Pro","isPartOf":{"@id":"https://creativthemes.com/theme-demo/buziness-pro/#website"},"inLanguage":"en-US","datePublished":"2018-12-09T11:11:38+00:00","dateModified":"2018-12-09T11:16:11+00:00"}]}</script>
    <!-- / Yoast SEO plugin. -->

    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//s.w.org" />
    <link rel="alternate" type="application/rss+xml" title="Alice Aragão Advocacia" href="https://alicearagao.com.br/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Alice Aragão Advocacia; Comments Feed" href="https://alicearagao.com.br/comments/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Alice Aragão Advocacia; Home Comments Feed" href="https://alicearagao.com.br/sample-page/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/creativthemes.com\/theme-demo\/buziness-pro\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.2"
            }
        };
        ! function(e, a, t) {
            var r, n, o, i, p = a.createElement("canvas"),
                s = p.getContext && p.getContext("2d");

            function c(e, t) {
                var a = String.fromCharCode;
                s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
                var r = p.toDataURL();
                return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
            }

            function l(e) {
                if (!s || !s.fillText) return !1;
                switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
                    case "flag":
                        return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
                    case "emoji":
                        return !c([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }

            function d(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (i = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    
    
    <link rel="stylesheet" id="wp-block-library-css" href="<?php echo TEMPLATEURL;?>/css/style.min.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="wp-block-library-theme-css" href="<?php echo TEMPLATEURL;?>/css/theme.min.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="wc-block-style-css" href="<?php echo TEMPLATEURL;?>/css/style.css?ver=2.5.14" type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css" href="<?php echo TEMPLATEURL;?>/css/woocommerce-layout.css?ver=4.0.0" type="text/css" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="<?php echo TEMPLATEURL;?>/css/woocommerce-smallscreen.css?ver=4.0.0" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="<?php echo TEMPLATEURL;?>/css/woocommerce.css?ver=4.0.0" type="text/css" media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="<?php echo TEMPLATEURL;?>/css/styles.css?ver=5.1.7" type="text/css" media="all" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy&display=swap">
    <link rel="stylesheet" id="buziness-pro-google-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%7CRoboto+Slab%3A400%2C700%7COxygen%3A400%2C700%7CRaleway%3A300%2C400%2C500%2C600%2C700%7CPoppins%3A300%2C400%2C500%2C600%7COpen+Sans%3A300%2C400%2C500%2C600%2C700%7CLato%3A300%2C400%2C700%7CUbuntu%3A300%2C400%2C700%7CPlayfair+Display%3A400%2C700%7CLora%3A400%2C700%7CTitillium+Web%3A300%2C400%2C600%2C700%7CMuli%3A300%2C400%2C600%2C700%7COxygen%3A300%2C400%2C700%7CNunito+Sans%3A300%2C400%2C600%2C700%7CMaven+Pro%3A400%2C500%2C700%7CCairo%3A300%2C400%2C700%7CPhilosopher%3A400%2C700&#038;subset=latin%2Clatin-ext" type="text/css" media="all" />
    <!-- <link rel="stylesheet" id="font-awesome-css" href="<?php echo TEMPLATEURL;?>/font-awesome.min.css?ver=4.7.0" type="text/css" media="all" />
    
    -->
    
    <link rel="stylesheet" id="slick-theme-css-css" href="<?php echo TEMPLATEURL;?>/css/slick-theme.min.css?ver=v2.2.0" type="text/css" media="all" />
    <link rel="stylesheet" id="slick-css-css" href="<?php echo TEMPLATEURL;?>/css/slick.min.css?ver=v1.8.0" type="text/css" media="all" />
    <link rel="stylesheet" id="blocks-css-css" href="<?php echo TEMPLATEURL;?>/css/blocks.min.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="buziness-pro-style-css" href="<?php echo TEMPLATEURL;?>/css/styleprincipal.css?ver=5.3.2" type="text/css" media="all" />
	
	<link rel="stylesheet" id="buziness-pro-style-css" href="<?php echo TEMPLATEURL;?>/style.css" type="text/css" media="all" />
	
    <style id="buziness-pro-style-inline-css" type="text/css">
        /*--------------------------------------------------------------
			# Blue Color
			--------------------------------------------------------------*/
        
#respond input[type="submit"],
.menu-toggle span,
.pagination .page-numbers.current,
.pagination .page-numbers:hover,
.pagination .page-numbers:focus,
.widget_search form.search-form button.search-submit,
input[type="submit"],
.wpcf7 input[type="submit"],
.jetpack_subscription_widget input[type="submit"]:hover,
.jetpack_subscription_widget input[type="submit"]:focus,
#secondary .jetpack_subscription_widget input[type="submit"]:hover,
#secondary .jetpack_subscription_widget input[type="submit"]:focus,
.blog-posts .post-categories,
.tags-links a:hover,
.tags-links a:focus,
.reply a,
.reply a:hover:before,
.reply a:focus:before,
.btn,
.slick-prev,
.slick-next,
.slick-prev:hover,
.slick-next:hover,
.slick-prev:focus,
.slick-next:focus,
.slick-dots li.slick-active button:before,
#additional-info .additional-info-item:hover,
#testimonial .slick-dots li.slick-active button:before,
#colophon .widget_search form.search-form button.search-submit,
.backtotop,
.divider:before,
.divider:after,
#cta .btn:hover,
#cta .btn:focus,
#gallery article .overlay,
#gallery article .more-link:hover,
#counter .overlay {
    background-color: #d89627;
}

a,
.site-title a:hover,
.site-title a:focus,
.main-navigation ul.nav-menu > li:hover > a,
.main-navigation ul.nav-menu .current-menu-item > a,
button.dropdown-toggle .fa,
.post-navigation a:hover,
.posts-navigation a:hover,
.post-navigation a:focus,
.posts-navigation a:focus,
.pagination .page-numbers,
.pagination .page-numbers.dots:hover,
.pagination .page-numbers.dots:focus,
.pagination .page-numbers.prev,
.pagination .page-numbers.next,
#secondary a:hover,
#secondary a:focus,
.widget_popular_post h3 a:hover,
.widget_popular_post h3 a:focus,
.widget_popular_post a:hover time,
.widget_popular_post a:focus time,
.widget_latest_post h3 a:hover,
.widget_latest_post h3 a:focus,
.widget_latest_post a:hover time,
.widget_latest_post a:focus time,
.page-header small,
.post-categories a,
.post-categories a:hover,
.post-categories a:focus,
.comment-meta .url:hover,
.comment-meta .url:focus,
.comment-metadata a,
.comment-metadata a time,
.course-item-wrapper .entry-title a:hover,
.course-item-wrapper .entry-title a:focus,
.team-wrapper .entry-title a:hover,
.team-wrapper .entry-title a:focus,
.blog-posts-wrapper .entry-title a:hover,
.blog-posts-wrapper .entry-title a:focus,
.entry-meta a:hover,
.entry-meta a:focus,
.entry-meta a:hover:before,
.entry-meta a:focus:before,
#additional-info .fa,
#cta .btn,
#cta p,
#gallery article .entry-title a:hover,
#gallery article .entry-title a:focus,
#gallery .more-link i {
    color: #d89627;
}

#respond input[type="submit"],
.widget_search form.search-form input[type="search"]:focus,
input[type="submit"],
.wpcf7 input[type="submit"],
.tags-links a,
.tags-links a:hover,
.tags-links a:focus,
.reply a,
.btn,
#cta .btn:hover,
#cta .btn:focus {
    border-color: #d89627;
}

#secondary .widget > ul li:first-child,
#secondary .widget > ul li:hover,
#secondary .widget_nav_menu ul li:first-child,
#secondary .widget_nav_menu ul li:hover {
    border-left-color: #d89627;
}

.main-navigation ul ul:before {
    border-bottom-color: #d89627;
}

@media screen and (min-width: 1024px) {
    .main-navigation ul ul li:hover > a {
        background-color: #d89627;
        color: #fff;
    }
    .main-navigation ul ul {
        border-top-color: #d89627;
    }
}
    </style>
    
    
    <script type="text/javascript" src="<?php echo TEMPLATEURL;?>/js/jquery.js?ver=1.12.4-wp"></script>
    <script type="text/javascript" src="<?php echo TEMPLATEURL;?>/js/jquery-migrate.min.js?ver=1.4.1"></script>
    <link rel="https://api.w.org/" href="<?php echo TEMPLATEURL;?>/js/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="#" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="#" />
    <meta name="generator" content="WordPress 5.3.2" />
    <meta name="generator" content="WooCommerce 4.0.0" />
    <link rel="shortlink" href="#" />
    <link rel="alternate" type="application/json+oembed" href="#" />
    <link rel="alternate" type="text/xml+oembed" href="#" />
    <!-- <link rel="pingback" href=#"> -->
    
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
	
	
	<!-- Recursos implementados -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
	
	<link rel="stylesheet" id="avia-module-button-css" href="<?php echo TEMPLATEURL;?>/css/buttons.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="avia-module-comments-css" href="<?php echo TEMPLATEURL;?>/css/comments.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="avia-module-gallery-css" href="<?php echo TEMPLATEURL;?>/css/gallery.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="avia-module-gridrow-css" href="<?php echo TEMPLATEURL;?>/css/grid_row.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="avia-module-heading-css" href="<?php echo TEMPLATEURL;?>/css/heading.css?ver=5.3.2" type="text/css" media="all" />
    <link rel="stylesheet" id="avia-module-rotator-css" href="<?php echo TEMPLATEURL;?>/css/headline_rotator.css?ver=5.3.2" type="text/css" media="all" />
    
	
	<?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
	<?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
	
	
	
	<?php if(get_post_meta($post->ID, 'ecpt_iconedottulo', true) == true){?>
		
		<link rel="shortcut icon" href="<? echo get_post_meta($post->ID, 'ecpt_iconedottulo', true); ?>" /> 
		<?php }else { ?>
		<?php }?>
	
	
	<?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    
    <?php wp_head(); ?>
	
	
	
</head>

<body class="home page-template-default page page-id-2 theme-buziness-pro woocommerce-no-js right-sidebar header-font-1 ">
    <div id="page" class="site"><a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div id="top-bar" class="top-bar-widgets col-2">
            <div class="wrapper">
                <?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
		        <?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
                <div class="widget widget_address_block">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><?php echo get_post_meta($post->ID, 'ecpt_endereo', true); ?></li>
                        <li><i class="fa fa-phone"></i><a href="tel:15417543010" class="phone"><?php echo get_post_meta($post->ID, 'ecpt_telefone', true); ?></a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@creativthemes.com" class="email"><?php echo get_post_meta($post->ID, 'ecpt_email', true); ?></a></li>
                    </ul>
                </div>
                <?php endwhile; ?>
		        <?php wp_reset_postdata(); ?>
                <!-- .widget_address_block -->
                <div class="widget widget_social_icons">
                    <div class="social-icons">
                        <ul>
                            <?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
		                    <?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'ecpt_instagram', true); ?>" target="_blank"></a>
                            </li>
                            <li>
                                <a href="<?php echo get_post_meta($post->ID, 'ecpt_facebook', true); ?>" target="_blank"></a>
                            </li>
                            <?php endwhile; ?>
		                    <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
                <!-- .widget_social_icons -->
            </div>
            <!-- .wrapper -->
        </div>
        <!-- #top-bar -->
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <div class="site-branding">
                    <div class="site-logo">
                    </div>
                    
                    
                    <!-- .site-logo -->
                    <!-- #site-identity -->
					<?php $configuracoesgerais = new WP_Query(array( 'post_type' => 'configuraesgerais', 'posts_per_page' => 1, 'offset' => '0' )); ?>
		            <?php while ($configuracoesgerais->have_posts()) : $configuracoesgerais->the_post(); ?>
					<div id="logotipo">
						<?php if ( is_front_page()) { ?>
							<h1 id="logo" style="background:url(<?php echo get_post_meta($post->ID, 'ecpt_logomarca', true); ?>) no-repeat;">
								<a href="<?php echo SITEURL; ?>" title="<?php echo WP_NAME; ?>" >
									<?php echo WP_NAME; ?>
								</a>
							</h1>
						<?php } else { ?>
							<strong id="logo" style="background:url(<?php echo get_post_meta($post->ID, 'ecpt_logomarca', true); ?>) no-repeat;">
								<a href="<?php echo SITEURL; ?>" title="<?php echo WP_NAME; ?>">
									<?php echo WP_NAME; ?>
								</a>
							</strong>
						<?php } ?>
					</div>
					<?php endwhile; ?>
		            <?php wp_reset_postdata(); ?>
					
					
                </div>
                <!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
                    <button type="button" class="menu-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="menu-primary-container">
                        <?php wp_nav_menu( array( 'menu' => 'Menu Principal' ) ); ?>
                        
                        
                    </div>
                </nav>
                <!-- #site-navigation -->
            </div>
            <!-- .wrapper -->
        </header>