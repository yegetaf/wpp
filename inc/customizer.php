<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function wp_bootstrap_starter_customize_register( $wp_customize ) {

    //Style Preset
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __( 'Preset Styles', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the typography', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );

    //Theme Option
    $wp_customize->add_setting( 'theme_option_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_option_setting', array(
        'label' => __( 'Theme Option', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'theme_option_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'cerulean' => 'Cerulean',
            'cosmo' => 'Cosmo',
            'cyborg' => 'Cyborg',
            'darkly' => 'Darkly',
            'flatly' => 'Flatly',
            'journal' => 'Journal',
            'litera' => 'Litera',
            'lumen' => 'Lumen',
            'lux' => 'Lux',
            'materia' => 'Materia',
            'minty' => 'Minty',
            'pulse' => 'Pulse',
            'sandstone' => 'Sandstone',
            'simplex' => 'Simplex',
            'sketchy' => 'Sketchy',
            'slate' => 'Slate',
            'solar' => 'Solar',
            'spacelab' => 'Spacelab',
            'superhero' => 'Superhero',
            'united' => 'United',
            'yeti' => 'Yeti',
        )
    ) ) );

    $wp_customize->add_setting( 'preset_style_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_style_setting', array(
        'label' => __( 'Typography', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_style_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'arbutusslab-opensans' => 'Arbutus Slab / Opensans',
            'montserrat-merriweather' => 'Montserrat / Merriweather',
            'montserrat-opensans' => 'Montserrat / Opensans',
            'oswald-muli' => 'Oswald / Muli',
            'poppins-lora' => 'Poppins / Lora',
            'poppins-poppins' => 'Poppins / Poppins',
            'roboto-roboto' => 'Roboto / Roboto',
            'robotoslab-roboto' => 'Roboto Slab / Roboto',
        )
    ) ) );


    /*Banner*/
    $wp_customize->add_section(
        'header_image',
        array(
            'title' => __( 'Header Banner', 'wp-bootstrap-starter' ),
            'priority' => 30,
        )
    );


    $wp_customize->add_control(
        'header_img',
        array(
            'label' => __( 'Header Image', 'wp-bootstrap-starter' ),
            'section' => 'header_images',
            'type' => 'text',
        )
    );


    // ---------------- Custom ---------------------
    // Header Images
    //Header Image 1
    $wp_customize->add_setting(
        'header_image1',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'header_img1_cont', array(
                'label' => __('Header #1', 'wp-bootstrap-starter'),
                'section' => 'header_image',
                'settings' => 'header_image1',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    //Header Image 2
    $wp_customize->add_setting(
        'header_image2',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'header_img2_cont', array(
                'label' => __('Header #2', 'wp-bootstrap-starter'),
                'section' => 'header_image',
                'settings' => 'header_image2',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    // Header Image 3
    $wp_customize->add_setting(
        'header_image3',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'header_img3_cont', array(
                'label' => __('Header #3', 'wp-bootstrap-starter'),
                'section' => 'header_image',
                'settings' => 'header_image3',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    // Header Text 1 

    $wp_customize->add_setting(
        'header_text1',
        array(
            'default' => __( 'Header 1 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_text1', array(
                'label' => __( 'Header Text 1', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_text1',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'header_subtitle1',
        array(
            'default' => __( 'Header 1 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_subtitle1', array(
                'label' => __( 'Header Subtitle 1', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_subtitle1',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'header_button1',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'header_button1_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'header_image', 
            'label'   => __( 'Header Button 1', 'wp-bootstrap-starter'),
            'settings' => 'header_button1',
        )
    );

    // Header Text 2 

    $wp_customize->add_setting(
        'header_text2',
        array(
            'default' => __( 'Header 2 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_text2', array(
                'label' => __( 'Header Text 2', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_text2',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'header_subtitle2',
        array(
            'default' => __( 'Header 2 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_subtitle2', array(
                'label' => __( 'Header Subtitle 2', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_subtitle2',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'header_button2',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'header_button2_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'header_image', 
            'label'   => __( 'Header Button 2', 'wp-bootstrap-starter'),
            'settings' => 'header_button2',
        )
    );

    // Header Text 3 

    $wp_customize->add_setting(
        'header_text3',
        array(
            'default' => __( 'Header 3 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_text3', array(
                'label' => __( 'Header Text 3', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_text3',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'header_subtitle3',
        array(
            'default' => __( 'Header 3 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'header_subtitle3', array(
                'label' => __( 'Header Subtitle 3', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_subtitle3',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'header_button3',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'header_button3_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'header_image', 
            'label'   => __( 'Header Button 3', 'wp-bootstrap-starter'),
            'settings' => 'header_button3',
        )
    );

    // ---------------------------- Features ---------------------------------------
    $wp_customize -> add_section (
        'features',
        array(
            'title' => __( 'Features', 'wp-bootstrap-starter' ),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'features_subtitle',
        array(
            'default' => __( 'Feature Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'feature_subtitle', array(
                'label' => __( 'Feature Subtitle', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_subtitle',
                'type' => 'text'
            ) )
    );

    // Feature Images
    //Feature Image 1
    $wp_customize->add_setting(
        'features_image1',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'features_img1_cont', array(
                'label' => __('features #1', 'wp-bootstrap-starter'),
                'section' => 'features',
                'settings' => 'features_image1',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    //Header Image 2
    $wp_customize->add_setting(
        'features_image2',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'features_img2_cont', array(
                'label' => __('features #2', 'wp-bootstrap-starter'),
                'section' => 'features',
                'settings' => 'features_image2',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    // Header Image 3
    $wp_customize->add_setting(
        'features_image3',
        array(
        'default-image' => get_template_directory_uri() . '/inc/assest/imgs/featureProducts/BYBakery-Homepic-0.jpg',
        'transport'     => 'refresh',
        'height'        => 180,
        'type' => 'theme_mod',
        'width'        => 160,
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'features_img3_cont', array(
                'label' => __('features #3', 'wp-bootstrap-starter'),
                'section' => 'features',
                'settings' => 'features_image3',
                'library_filter' => array( 'gif', 'jpg', 'jpeg', 'png', 'ico' ),
            )
        )
    );

    // Header Text 1 

    $wp_customize->add_setting(
        'features_text1',
        array(
            'default' => __( 'Features 1 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text1', array(
                'label' => __( 'Features Text 1', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_text1',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'header_subtitle1',
        array(
            'default' => __( 'Features 1 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_subtitle1', array(
                'label' => __( 'Features Subtitle 1', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_subtitle1',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'features_button1',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'features_button1_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'features', 
            'label'   => __( 'Features Button 1', 'wp-bootstrap-starter'),
            'settings' => 'features_button1',
        )
    );

    // Header Text 2 

    $wp_customize->add_setting(
        'features_text2',
        array(
            'default' => __( 'Features 2 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text2', array(
                'label' => __( 'Features Text 2', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_text2',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'features_subtitle2',
        array(
            'default' => __( 'Header 2 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_subtitle2', array(
                'label' => __( 'Features Subtitle 2', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_subtitle2',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'features_button2',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'features_button2_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'features', 
            'label'   => __( 'Features Button 2', 'wp-bootstrap-starter'),
            'settings' => 'features_button2',
        )
    );

    // Header Text 3 

    $wp_customize->add_setting(
        'features_text3',
        array(
            'default' => __( 'Features 3 Text','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text3', array(
                'label' => __( 'Features Text 3', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_text3',
                'type' => 'text'
            ) )
    );

    $wp_customize->add_setting(
        'features_subtitle3',
        array(
            'default' => __( 'Header 3 Subtitle','wp-bootstrap-starter' ),
            'sanitize_callback' => 'wp_filter_nohtml_kses',

        )
        );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_subtitle3', array(
                'label' => __( 'Features Subtitle 3', 'wp-bootstrap-starter' ),
                'section'    => 'features',
                'settings'   => 'features_subtitle3',
                'type' => 'text'
            ) )
    );

    $wp_customize ->add_setting(
        'features_button3',
        array(
            'default' => ''
        )
    );

    $wp_customize -> add_control(
        'features_button3_ctl',
        array(
            'type'    => 'dropdown-pages',
            'section' => 'features', 
            'label'   => __( 'Features Button 3', 'wp-bootstrap-starter'),
            'settings' => 'features_button3',
        )
    );

    





    // ---------- End of custom ----------------


    $wp_customize->add_setting(
        'header_bg_color_setting',
        array(
            'default'     => '#fff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'      => __( 'Header Banner Background Color', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_bg_color_setting',
            ) )
    );

    $wp_customize->add_setting( 'header_banner_title_setting', array(
        'default' => __( 'WP Bootstrap Framework', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_title_setting', array(
        'label' => __( 'Banner Title', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => '',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_banner_tagline_setting', array(
        'default' => __( 'To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_tagline_setting', array(
        'label' => __( 'Banner Tagline', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_tagline_setting',
        'type' => 'text'
    ) ) );
    $wp_customize->add_setting( 'header_banner_visibility', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_visibility', array(
        'settings' => 'header_banner_visibility',
        'label'    => __('Remove Header Banner', 'wp-bootstrap-starter'),
        'section'    => 'header_image',
        'type'     => 'checkbox',
    ) ) );


    //Site Name Text Color
   $wp_customize->add_section(
        'site_name_text_color',
        array(
            'title' => __( 'Other Customizations', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 40,
        )
    );
    $wp_customize->add_section(
        'colors',
        array(
            'title' => __( 'Background Color', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 50,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __( 'Background Image', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 60,
            'panel' => 'styling_option_panel',
        )
    );

    // Bootstrap and Fontawesome Option
    $wp_customize->add_setting( 'cdn_assets_setting', array(
        'default' => __( 'no','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( 
        'cdn_assets',
        array(
            'label' => __( 'Use CDN for Assets', 'wp-bootstrap-starter' ),
            'description' => __( 'All Bootstrap Assets and FontAwesome will be loaded in CDN.', 'wp-bootstrap-starter' ),
            'section' => 'site_name_text_color',
            'settings' => 'cdn_assets_setting',
	        'type'    => 'select',
	        'choices' => array(
	            'yes' => __( 'Yes', 'wp-bootstrap-starter' ),
	            'no' => __( 'No', 'wp-bootstrap-starter' ),
        	)
        )
    );

    // Custom Customizations





    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'wp_bootstrap_starter_logo', array(
        //'default' => __( '', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'wp-bootstrap-starter' ),
        'section'  => 'title_tagline',
        'settings' => 'wp_bootstrap_starter_logo',
    ) ) );

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );

add_action( 'wp_head', 'wp_bootstrap_starter_customizer_css');
function wp_bootstrap_starter_customizer_css()

{
    $header_bg_color = get_theme_mod('header_bg_color_setting', '#fff');

    ?>
    <style type="text/css">
        #page-sub-header { background: <?php echo esc_attr( $header_bg_color ); ?>; }
        div.jumbotron.hero-nature {
            background-image: url('<?php echo get_theme_mod('header_image1'); ?>');
        }

        div.jumbotron.hero-photography {
        background-image: url('<?php echo get_theme_mod('header_image2'); ?>');
        }

        div.jumbotron.hero-technology {
        background-image: url('<?php echo get_theme_mod('header_image3'); ?>');
        }

    </style>
    <?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
    wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );
