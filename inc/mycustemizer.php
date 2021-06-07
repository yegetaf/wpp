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
}