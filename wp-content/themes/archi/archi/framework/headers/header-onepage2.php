<?php global $archi_option; ?>
<div id="wrapper" class="de-navbar-left"> 
    <div class="container-fluid">
        <div class="row">       
            <div id="de-sidebar" class="col-md-3">
                <header class="side-header">
                    <span id="menu-btn"></span>
                    <h1 class="logo">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">
                            <img class="logo" src="<?php echo esc_url($archi_option['logo2']['url']); ?>" alt="">
                            <img class="logo-2" src="<?php echo esc_url($archi_option['logo']['url']); ?>" alt="">                                
                        </a>
                    </h1>

                    <nav>
                        <?php
                            $onepage = array(
                                'theme_location'  => 'onepage',
                                'menu'            => '',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'mainmenu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                                'walker'          => new wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                            );
                            if ( has_nav_menu( 'onepage' ) ) {
                                wp_nav_menu( $onepage );
                            }
                        ?> 
                    </nav>

                    <div class="h-content">
                        <div class="social-icons-2">
                            <?php if($archi_option['facebook']!=''){ ?>                                    
                                <a target="_blank" href="<?php echo esc_url($archi_option['facebook']); ?>"><i class="fa fa-facebook fa-lg"></i></a>                                    
                            <?php } ?>                                
                            <?php if($archi_option['twitter']!=''){ ?>                                    
                                <a target="_blank" href="<?php echo esc_url($archi_option['twitter']); ?>"><i class="fa fa-twitter fa-lg"></i></a>                                   
                            <?php } ?>                                
                            <?php if($archi_option['google']!=''){ ?>                                    
                                <a target="_blank" href="<?php echo esc_url($archi_option['google']); ?>"><i class="fa fa-google-plus fa-lg"></i></a>                                    
                            <?php } ?>
                            <?php if($archi_option['dribbble']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['dribbble']); ?>"><i class="fa fa-dribbble fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['pinterest']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['pinterest']); ?>"><i class="fa fa-pinterest fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['linkedin']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['linkedin']); ?>"><i class="fa fa-linkedin fa-lg"></i></a>
                            <?php } ?>                                
                            <?php if($archi_option['youtube']!=''){ ?>                                    
                                <a target="_blank" href="<?php echo esc_url($archi_option['youtube']); ?>"><i class="fa fa-youtube fa-lg"></i></a>                                   
                            <?php } ?>  
                            <?php if($archi_option['vimeo']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['vimeo']); ?>"><i class="fa fa-vimeo-square fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['rss']!=''){ ?>                                    
                                <a target="_blank" href="<?php echo esc_url($archi_option['rss']); ?>"><i class="fa fa-rss fa-lg"></i></a>                                   
                            <?php } ?>                                                            
                            <?php if($archi_option['skype']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['skype']); ?>"><i class="fa fa-skype fa-lg"></i></a>
                            <?php } ?>                               
                            <?php if($archi_option['instagram']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['instagram']); ?>"><i class="fa fa-instagram fa-lg"></i></a>
                            <?php } ?>  
                            <?php if($archi_option['github']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['github']); ?>"><i class="fa fa-github fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['tumblr']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['tumblr']); ?>"><i class="fa fa-tumblr-square fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['soundcloud']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['soundcloud']); ?>"><i class="fa fa-soundcloud fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['behance']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['behance']); ?>"><i class="fa  fa-behance fa-lg"></i></a>
                            <?php } ?>
                            <?php if($archi_option['lastfm']!=''){ ?>
                                <a target="_blank" href="<?php echo esc_url($archi_option['lastfm']); ?>"><i class="fa fa-lastfm fa-lg"></i></a>
                            <?php } ?> 
                        </div>
                    </div>
                </header>
            </div>
            <div id="main" class="main-wrap col-md-9 no-padding col-md-offset-3" >