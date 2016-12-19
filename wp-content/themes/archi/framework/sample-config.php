<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "archi_option";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'archi_option',
        'use_cdn' => TRUE,
        'display_name'     => $theme->get('Name'),
        'display_version'  => $theme->get('Version'),
        'page_title' => 'Archi Options',
        'update_notice' => FALSE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Archi Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'dev_mode'   => false,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_html__( 'Theme Information 1', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => esc_html__( 'Theme Information 2', 'archi' ),
            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'archi' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'archi' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    // ACTUAL DECLARATION OF SECTIONS
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-stackoverflow',
        'title' => __('Miscellaneous Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'preload-switch',
                'type'     => 'switch', 
                'title'    => __('Preload Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),  
            array(
                'id'       => 'animate-switch',
                'type'     => 'switch', 
                'title'    => __('Animation Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),  
            array(
                'id'       => 'mobile-sticky',
                'type'     => 'switch', 
                'title'    => __('Mobile Header Sticky On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ),  
            array(
                'id'       => 'footer-landing',
                'type'     => 'switch', 
                'title'    => __('Footer Widget Landing Page On?', 'archi'),
                'subtitle' => __('Look, it\'s off!', 'archi'),
                'default'  => false,
            ),
            array(
                'id'       => 'subpage-switch',
                'type'     => 'switch', 
                'title'    => __('Sub-Pages Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),                                             
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-picture',
        'title' => __('Logo & Favicon Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'favicon',
                'type' => 'media',
                'url' => true,
                'title' => __('Favicon', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Favicon.', 'archi'),
                'subtitle' => __('Favicon', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/favicon.png'),                     
            ),
            array(
                'id' => 'logo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('logo.', 'archi'),
                'subtitle' => __('Logo', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo.png'),                     
            ),                                  
            array(
                'id' => 'logo2',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo 2 on Side Navigation', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('logo 2 on Side Navigation.', 'archi'),
                'subtitle' => __('Logo 2', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/logo-2.png'),                     
            ),  
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Top Header Settings', 'archi'),
        'fields' => array(
            array(
                'id'       => 'topbar-onepage',
                'type'     => 'switch', 
                'title'    => __('Topbar One-Page Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ), 
            array(
                'id'       => 'topbar-allpage',
                'type'     => 'switch', 
                'title'    => __('Topbar All Page Off?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'default'  => true,
            ),    
            array(
                'id' => 'info_list_text',
                'type' => 'editor',
                'title' => __('Topbar info text.', 'archi'),
                'subtitle' => __('Add topbar info html text.', 'archi'),
                'default' => '',
            ),                              
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-qrcode',
        'title' => __('Header Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'header_position',
                'type' => 'select',
                'title' => __('Header Position', 'archi'),
                'subtitle' => __('Header position use for Header layout with Header Normal.', 'archi'),
                'desc' => __('Header position : select header on top page or header on bottom page.', 'archi'),
                'options'  => array(
                    'ontop_page' => 'Header on top',                    
                    'onbottom_page' => 'Header on bottom',                                                                 
                ),
                'default' => 'ontop_page',
            ),
            array(
                'id' => 'header_layout',
                'type' => 'select',
                'title' => __('Header Layouts', 'archi'),
                'subtitle' => __('Header layout', 'archi'),
                'desc' => __('Header layout : select header on top page or header on side left.', 'archi'),
                'options'  => array(
                    'htop_page' => 'Header Normal',                    
                    'hleft_side' => 'Side Navigation Dark', 
                    'hleft_side_light' => 'Side Navigation Light',                                                                
                ),
                'default' => 'htop_page',
            ),
            array(
                'id' => 'header_style',
                'type' => 'select',
                'title' => __('Header Style', 'archi'),
                'subtitle' => __('Use with Header Layouts : Header Normal', 'archi'),
                'desc' => __('Select header style : Dark or Light or Overlay or Transparent.', 'archi'),
                'options'  => array(
                    'header_dark' => 'Header Dark',
                    'header_light' => 'Header Light', 
                    'header_overlay' => 'Header Overlay', 
                    'header_transparent' => 'Header Transparent'                          
                ),
                'default' => 'header_dark',
            ),                    
            array(
                'id' => 'header-background-color',
                'type' => 'color',
                'title' => __('Header Static Background Color', 'archi'),
                'subtitle' => __('Pick the header static background color for the theme (default: rgba(0,0,0,0.5)).', 'archi'),
                'default' => 'rgba(0,0,0,0.5)',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-small-background-color',
                'type' => 'color',
                'title' => __('Header Scroll Background Color', 'archi'),
                'subtitle' => __('Pick the header scroll background color for the theme (default: #18191b).', 'archi'),
                'default' => '#18191b',
                'validate' => 'color',
            ),
            array(
                'id' => 'header-small-border-bottom-color',
                'type' => 'color',
                'title' => __('Header Scroll Border Bottom Color', 'archi'),
                'subtitle' => __('Pick the header scroll Border Bottom color for the theme (default: #333333).', 'archi'),
                'default' => '#333333',
                'validate' => 'color',
            ),                    
            array(
                'id' => 'header-text-color',
                'type' => 'color',
                'title' => __('Header Text Color', 'archi'),
                'subtitle' => __('Pick the header text color for the theme (default: #fff).', 'archi'),
                'default' => '#fff',
                'validate' => 'color',
            ),
            array(
                'id' => 'header-border-color',
                'type' => 'color',
                'title' => __('Header Border Menu Item Color', 'archi'),
                'subtitle' => __('Use for Side Navigation Left (default: #1b1b1b).', 'archi'),
                'default' => '#1b1b1b',
                'validate' => 'color',
            ),
            array(
                'id' => 'menu_type',
                'type' => 'select',
                'title' => __('Menu style', 'archi'),
                'subtitle' => __('Icon Menu Style', 'archi'),
                'desc' => __('Menu Style', 'archi'),
                'options'  => array(
                    'dotted' => 'Dotted Separator',
                    'line' => 'Line Separator',
                    'circle' => 'Circle Separator',
                    'square' => 'Square Separator',
                    'plus' => 'Plus Separator',
                    'strip' => 'Strip Separator',
                    'no' => 'No Separator',
                ),
                'default' => 'archi',
            ),                                   
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-font',
        'title' => __('Typography', 'archi'),
        'fields' => array(
            array(
                'id' => 'h1-typography',
                'type' => 'typography',
                'output' => array('h1'),
                'title' => __('Heading 1', 'archi'),
                'subtitle' => __('Specify the heading 1 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),   
            array(
                'id' => 'h2-typography',
                'type' => 'typography',
                'output' => array('h2'),
                'title' => __('Heading 2', 'archi'),
                'subtitle' => __('Specify the heading 2 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h3-typography',
                'type' => 'typography',
                'output' => array('h3'),
                'title' => __('Heading 3', 'archi'),
                'subtitle' => __('Specify the heading 3 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h4-typography',
                'type' => 'typography',
                'output' => array('h4'),
                'title' => __('Heading 4', 'archi'),
                'subtitle' => __('Specify the heading 4 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h5-typography',
                'type' => 'typography',
                'output' => array('h5'),
                'title' => __('Heading 5', 'archi'),
                'subtitle' => __('Specify the heading 5 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ), 
            array(
                'id' => 'h6-typography',
                'type' => 'typography',
                'output' => array('h6'),
                'title' => __('Heading 6', 'archi'),
                'subtitle' => __('Specify the heading 6 font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => ''
                ),
            ),    

            array(
                'id' => 'menu-typography',
                'type' => 'typography',
                'output' => array('#mainmenu a'),
                'title' => __('Menu item', 'archi'),
                'subtitle' => __('Specify the Menu item font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color'       => '', 
                    'font-style'  => '', 
                    'font-family' => '',
                    'font-size'   => '', 
                    'line-height' => '',
                ),
            ),                                   
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-briefcase',
        'title' => __('Portfolio Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'ajax_work',
                'type' => 'switch',
                'title' => __('Portfolio Ajax Load content on page?', 'archi'),
                'subtitle' => __('Look, it\'s on!', 'archi'),
                'desc' => __('Use for Portfolio in home page, Load Ajax Content or Link out single Portfolio.', 'archi'),
                'default'  => true,
            ),                     
            array(
                'id' => 'portfolio_title',
                'type' => 'text',
                'title' => __('Title in Portfolio Archive Page ', 'archi'),
                'subtitle' => '',                                              
                'default' => 'Portfolio'
            ),
            array(
                'id' => 'portfolio_show',
                'type' => 'text',
                'title' => __('Show Posts', 'archi'),
                'subtitle' => 'Show number posts in portfolio archive page',                                              
                'default' => '8'
            ),  
            array(
                'id' => 'portfolio_thumbnail',
                'type' => 'media',
                'title' => __('Background Main Portfolio Top Page', 'archi'),
                'subtitle' => __('Background Portfolio Archive and Portfolio Category page.', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),   
            array(
                'id' => 'portfolio_columns',
                'type' => 'select',
                'title' => __('Portfolio Columns style', 'archi'),
                'subtitle' => __('Select Portfolio Columns style.', 'archi'),
                'desc' => __('Default show portfolio archive page is grid 4 columns.', 'archi'),
                'options'  => array(
                    '6' => 'Columns 6',
                    '5' => 'Columns 5',
                    '4' => 'Columns 4',
                    '3' => 'Columns 3',
                    '2' => 'Columns 2',
                ),
                'default' => '4',
            ),    
            array(
                'id' => 'portfolio_link',
                'type' => 'text',
                'title' => __('Link to list portfolio page', 'archi'),
                'subtitle' => 'Add link to portfolio page',                                              
                'default' => ''
            ),            
         )
    ) );

    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-blogger',
        'title' => __('Blog Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'blog_excerpt',
                'type' => 'text',
                'title' => __('Blog custom excerpt lenght', 'archi'),
                'subtitle' => __('Input Blog custom excerpt lenght', 'archi'),
                'desc' => __('Blog custom excerpt lenght', 'archi'),
                'default' => '30'
            ),
            array(
                'id' => 'the_blog_single',
                'type' => 'text',
                'title' => __('The Blog Single Title', 'archi'),
                'subtitle' => __('Input blog single', 'archi'),
                'desc' => __('The Blog Single Title', 'archi'),
                'default' => 'The Blog Single'
            ),                     
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-shopping-cart-sign',
        'title' => __('Shop Settings', 'biss'),
        'fields' => array(   
            array(
                'id' => 'shop_thumbnail',
                'type' => 'media',
                'title' => __('Background Main Shop Top Page', 'archi'),
                'subtitle' => __('Background Shop', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),
            array(
                'id' => 'product_thumbnail',
                'type' => 'media',
                'title' => __('Background Single Product Top Page', 'archi'),
                'subtitle' => __('Background Single Product', 'archi'),                        
                'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),
            ),
            
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-graph',
        'title' => __('404 Settings', 'archi'),
        'fields' => array(
             array(
                'id' => '404_title',
                'type' => 'text',
                'title' => __('404 Title', 'archi'),
                'subtitle' => __('Input 404 Title', 'archi'),
                'desc' => __('404 Title', 'archi'),
                'default' => '404'
            ),                              
             array(
                'id' => '404_content',
                'type' => 'editor',
                'title' => __('404 Content', 'archi'),
                'subtitle' => __('Enter 404 Content', 'archi'),
                'desc' => __('404 Content', 'archi'),
                'default' => 'The page you are looking for no longer exists. Perhaps you can return back to the sites homepage see you can find what you are looking for.'
            ),      
            array(
                'id' => 'back_404',
                'type' => 'text',
                'title' => __('Button Back Home', 'archi'),                        
                'desc' => __('Text Button Go To Home.', 'archi'),
                'subtitle' => __('Button Back Home', 'archi'),
                'default' => 'Back To Home',
            ),                  
         )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-group',
        'title' => __('Social Settings', 'archi'),
        'fields' => array(
            array(
                'id' => 'facebook',
                'type' => 'text',
                'title' => __('Facebook Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://www.facebook.com/',
            ),
            array(
                'id' => 'google',
                'type' => 'text',
                'title' => __('Google+ Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://plus.google.com',
            ),
            array(
                'id' => 'rss',
                'type' => 'text',
                'title' => __('RSS Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#',
            ),
            array(
                'id' => 'twitter',
                'type' => 'text',
                'title' => __('Twitter Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => 'https://twitter.com/',
            ),
            array(
                'id' => 'github',
                'type' => 'text',
                'title' => __('Github Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '#'
            ),
            array(
                'id' => 'youtube',
                'type' => 'text',
                'title' => __('Youtube Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'linkedin',
                'type' => 'text',
                'title' => __('Linkedin Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'dribbble',
                'type' => 'text',
                'title' => __('Dribbble Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => '',
            ),
            array(
                'id' => 'behance',
                'type' => 'text',
                'title' => __('Behance Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'instagram',
                'type' => 'text',
                'title' => __('Instagram Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),
            array(
                'id' => 'skype',
                'type' => 'text',
                'title' => __('Skype Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ),  
            array(
                'id' => 'pinterest',
                'type' => 'text',
                'title' => __('pinterest Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'vimeo',
                'type' => 'text',
                'title' => __('vimeo Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'tumblr',
                'type' => 'text',
                'title' => __('tumblr Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'soundcloud',
                'type' => 'text',
                'title' => __('soundcloud Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
            array(
                'id' => 'lastfm',
                'type' => 'text',
                'title' => __('lastfm Url', 'archi'),
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'default' => ''
            ), 
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => ' el-icon-credit-card',
        'title' => __('Footer Settings', 'archi'),
        'fields' => array(                      
            array(
                'id' => 'footer_text',
                'type' => 'editor',
                'title' => __('Footer Text', 'archi'),
                'subtitle' => __('Copyright Text', 'archi'),
                'default' => '© Copyright 2015 - Archi by OceanThemes',
            ),                    
        )
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => __('Coming Soon Settings', 'archi'),
        'fields' => array(
           array(
                'id' => 'cms_logo',
                'type' => 'media',
                'url' => true,
                'title' => __('Logo', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Upload your logo.', 'archi'),
                'subtitle' => __('Recommended size: Height: auto and Width: 120px', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/logo-border.png'),
            ),                 
           array(
                'id'          => 'cmsoon_date',
                'type'        => 'date',
                'title'       => __('Date Option', 'archi'), 
                'subtitle'    => __('No validation can be done on this field type', 'archi'),
                'desc'        => __('This is the description field, again good for additional info.', 'archi'),
                'placeholder' => 'Click to enter a date',
                'default' => '12/23/2016'
            ),
            array(
                'id' => 'cs_bg',
                'type' => 'media',
                'title' => __('Background Image', 'archi'),
                'subtitle' => __('Background Image', 'archi'),
                'desc' => __('Use For Coming Soon Page', 'archi'),
                'default' => array('url' => get_template_directory_uri().'/images/bg-6.jpg')
            ), 
            array(
                'id' => 'link_video_mp4',
                'type' => 'text',
                'title' => __('Link Video MP4', 'archi'),
                'subtitle' => __('Link Video MP4', 'archi'),
                'desc' => __('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.mp4'
            ),
            array(
                'id' => 'link_video_webm',
                'type' => 'text',
                'title' => __('Link Video Webm', 'archi'),
                'subtitle' => __('Link Video Webm', 'archi'),
                'desc' => __('Use For Coming Soon Video', 'archi'),
                'default' => 'http://www.themenesia.com/video/sample.webm'
            ),
            array(
                'id' => 'cs_title',
                'type' => 'text',
                'title' => __('Coming Soon Title', 'archi'),
                'subtitle' => __('Coming Soon Title', 'archi'),
                'desc' => __('Coming Soon Title', 'archi'),
                'default' => 'Our Website Coming Soon'
            ),                              
            array(
                'id' => 'cs_stitle',
                'type' => 'text',
                'title' => __('Coming Soon Subtitle', 'archi'),
                'subtitle' => __('Coming Soon Subtitle', 'archi'),
                'desc' => __('Coming Soon Subtitle', 'archi'),
                'default' => 'Time left until launching',
            ),                                     
        )    
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-hourglass',
        'title' => __('Hide Content Coming Soon Settings', 'archi'),
        'fields' => array(            
            array(
                'id' => 'hc_title',
                'type' => 'text',
                'title' => __('Coming Soon Title', 'archi'),
                'subtitle' => __('Coming Soon Title', 'archi'),
                'desc' => __('Coming Soon Title', 'archi'),
                'default' => 'Award Winning Interior Design'
            ),                              
            array(
                'id' => 'hc_stitle',
                'type' => 'editor',
                'title' => __('Coming Soon Subtitle', 'archi'),
                'subtitle' => __('Coming Soon Subtitle', 'archi'),
                'desc' => __('Coming Soon Subtitle', 'archi'),
                'default' => '',
            ),  
            array(
                'id' => 'hc_contact',
                'type' => 'editor',
                'title' => __('Contact Form Shortcode', 'archi'),
                'subtitle' => __('Contact Form Shortcode', 'archi'),
                'desc' => __('Ex: [contact-form-7 id="283" title="Contact form 1"]', 'archi'),
                'default' => '',
            ),                                   
        )    
    ) );
    Redux::setSection( $opt_name, array(
        'icon' => 'el-icon-website',
        'title' => __('Styling Options', 'archi'),
        'fields' => array(
            array(
                'id' => 'version_type',
                'type' => 'select',
                'title' => __('Theme Version', 'archi'),
                'subtitle' => __('Dark or White', 'archi'),
                'desc' => __('Dark or White', 'archi'),
                'options'  => array(
                    'dark' => 'Dark Version',
                    'light' => 'Light Version',
                ),
                'default' => 'dark',
            ),
            
            array(
                'id' => 'bg_allpage',
                'type' => 'media',
                'url' => true,
                'title' => __('Background Header All Pages', 'archi'),
                'compiler' => 'true',
                //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc' => __('Background Header All Pages', 'archi'),
                'subtitle' => __('Background Header All Pages', 'archi'),
               'default' => array('url' => get_template_directory_uri().'/images/subheader-1.jpg'),                     
            ), 
            array(
                'id' => 'main-color',
                'type' => 'color',
                'title' => __('Theme Main Color', 'archi'),
                'subtitle' => __('Pick the main color for the theme (default: #FAB207).', 'archi'),
                'default' => '#FAB207',
                'validate' => 'color',
            ),  
            array(
                'id' => 'footer_textcolor',
                'type' => 'color',
                'title' => __('Footer Text Color', 'archi'),
                'subtitle' => __('Pick the Footer Text color for the theme (default: #cccccc).', 'archi'),
                'default' => '#cccccc',
                'validate' => 'color',
            ),
            array(
                'id' => 'footer_bgcolor',
                'type' => 'color',
                'title' => __('Footer Background Color', 'archi'),
                'subtitle' => __('Pick the Footer Background color for the theme (default: #111111).', 'archi'),
                'default' => '#111111',
                'validate' => 'color',
            ),
            array(
                'id' => 'footer_bottom_bgcolor',
                'type' => 'color',
                'title' => __('Footer Bottom Background Color', 'archi'),
                'subtitle' => __('Pick the Footer Bottom Background color for the theme (default: #0b0b0b).', 'archi'),
                'default' => '#0b0b0b',
                'validate' => 'color',
            ),
            array(
                'id' => 'body-font2',
                'type' => 'typography',
                'output' => array('body'),
                'title' => __('Body Font', 'archi'),
                'subtitle' => __('Specify the body font properties.', 'archi'),
                'google' => true,
                'default' => array(
                    'color' => '',
                    'font-size' => '',
                    'line-height' => '',
                    'font-family' => '',
                    'font-weight' => ''
                ),
            ),
             array(
                'id' => 'custom-css',
                'type' => 'ace_editor',
                'title' => __('CSS Code', 'archi'),
                'subtitle' => __('Paste your CSS code here.', 'archi'),
                'mode' => 'css',
                'theme' => 'monokai',
                'desc' => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                'default' => "#header{\nmargin: 0 auto;\n}"
            ),
        )
    ) );    

    /*
     * <--- END SECTIONS
     */
