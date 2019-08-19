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

function wp_npo_add_customize_jumbotron_setting( $wp_customize ){
    $wp_customize->add_section(
        'jumbotron',
        array(
            'title' => __( 'jumbotron', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );
    //Onepage Jumbotron Title
    $wp_customize->add_setting( 'jumbotron_title', array(
        'default'   => __('NPO Jombotron', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jumbotron_title', array(
        'label' => __( 'Jumbotron title', '99Npo' ),
        'section' => 'jumbotron',
        'settings' => 'jumbotron_title',
        'type'  => 'text',
        )
    ));
    //Jumbotron body text1
    $wp_customize->add_setting( 'jumbotron_body', array(
        'default'   => __('Jumbotron body가 들어가는 문구입니다.', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jumbotron_body', array(
        'label' => __( 'Jumbotron Body', '99Npo' ),
        'section' => 'jumbotron',
        'settings' => 'jumbotron_body',
        'type'  => 'textarea',
        )
    ));
    //Jumbotron body text2
    $wp_customize->add_setting( 'jumbotron_body2', array(
        'default'   => __('Jumbotron body2가 들어가는 문구입니다.', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jumbotron_body2', array(
        'label' => __( 'Jumbotron Body2', '99Npo' ),
        'section' => 'jumbotron',
        'settings' => 'jumbotron_body2',
        'type'  => 'textarea',
        )
    ));
     //Jumbotron link
     $wp_customize->add_setting( 'jumbotron_link', array(
        'default'   => __('http://collectivecollege.net', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'jumbotron_link', array(
        'label' => __( 'Jumbotron 링크', '99Npo' ),
        'section' => 'jumbotron',
        'settings' => 'jumbotron_link',
        'type'  => 'textinput',
        )
    ));
}

function wp_npo_add_customize_process_setting( $wp_customize ){
    //add process
    $wp_customize->add_section(
        'process',
        array(
            'title' => __( 'Process', '99Npo' ),
            'priority' => 20,
        )
    );
    //Process setting first title
    $wp_customize->add_setting( 'process_first_title', array(
        'default'   => __('process first title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_first_title', array(
        'label' => __( 'process first title', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_first_title',
        'type'  => 'text',
        )
    ));
    //Process setting first body
    $wp_customize->add_setting( 'process_first_body', array(
        'default'   => __('process first body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_first_body', array(
        'label' => __( 'process first body', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_first_body',
        'type'  => 'textarea',
        )
    ));

    //Process setting second title
    $wp_customize->add_setting( 'process_second_title', array(
        'default'   => __('process second title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_second_title', array(
        'label' => __( 'process second title', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_second_title',
        'type'  => 'text',
        )
    ));
    //Process setting second body
    $wp_customize->add_setting( 'process_second_body', array(
        'default'   => __('process second body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_second_body', array(
        'label' => __( 'process second body', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_second_body',
        'type'  => 'textarea',
        )
    ));

    //Process setting third title
    $wp_customize->add_setting( 'process_third_title', array(
        'default'   => __('process second title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_third_title', array(
        'label' => __( 'process third title', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_third_title',
        'type'  => 'text',
        )
    ));
    //Process setting second body
    $wp_customize->add_setting( 'process_third_body', array(
        'default'   => __('process second body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'process_third_body', array(
        'label' => __( 'process third body', '99Npo' ),
        'section' => 'process',
        'settings' => 'process_third_body',
        'type'  => 'textarea',
        )
    ));
}

function wp_npo_add_customize_curriculum_setting( $wp_customize ) {
    //add curriculum
    $wp_customize->add_section(
        'curriculum',
        array(
            'title' => __( 'Curriculum', '99Npo' ),
            'priority' => 20,
        )
    );
    //Curriculum setting first title
    $wp_customize->add_setting( 'curriculum_first_title', array(
        'default'   => __('curriculum first title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_first_title', array(
        'label' => __( 'curriculum first title', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_first_title',
        'type'  => 'text',
        )
    ));
    //Curriculum setting first body
    $wp_customize->add_setting( 'curriculum_first_body', array(
        'default'   => __('curriculum first body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_first_body', array(
        'label' => __( 'curriculum first body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_first_body',
        'type'  => 'textarea',
        )
    ));

    //Curriculum setting first modal
    $wp_customize->add_setting( 'curriculum_first_modal_body', array(
        'default'   => __('curriculum modal first body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        // 'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_first_modal_body', array(
        'label' => __( 'curriculum first modal body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_first_modal_body',
        'type'  => 'textarea',
        )
    ));
    // two
    //Curriculum setting second title
    $wp_customize->add_setting( 'curriculum_second_title', array(
        'default'   => __('curriculum second title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_second_title', array(
        'label' => __( 'curriculum second title', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_second_title',
        'type'  => 'text',
        )
    ));
    //Curriculum setting first body
    $wp_customize->add_setting( 'curriculum_second_body', array(
        'default'   => __('curriculum second body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_second_body', array(
        'label' => __( 'curriculum second body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_second_body',
        'type'  => 'textarea',
        )
    ));

    //Curriculum setting first modal
    $wp_customize->add_setting( 'curriculum_second_modal_body', array(
        'default'   => __('curriculum modal second body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        // 'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_second_modal_body', array(
        'label' => __( 'curriculum second modal body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_second_modal_body',
        'type'  => 'textarea',
        )
    ));
    // three
    //Curriculum setting third title
    $wp_customize->add_setting( 'curriculum_third_title', array(
        'default'   => __('curriculum third title', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_third_title', array(
        'label' => __( 'curriculum third title', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_third_title',
        'type'  => 'text',
        )
    ));
    //Curriculum setting first body
    $wp_customize->add_setting( 'curriculum_third_body', array(
        'default'   => __('curriculum third body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_third_body', array(
        'label' => __( 'curriculum third body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_third_body',
        'type'  => 'textarea',
        )
    ));

    //Curriculum setting first modal
    $wp_customize->add_setting( 'curriculum_third_modal_body', array(
        'default'   => __('curriculum modal third body', '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        // 'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'curriculum_third_modal_body', array(
        'label' => __( 'curriculum third modal body', '99Npo' ),
        'section' => 'curriculum',
        'settings' => 'curriculum_third_modal_body',
        'type'  => 'textarea',
        )
    ));
}

function add_project_control($wp_customize, $section, $setting, $label, $type){
    $wp_customize->add_setting( $setting, array(
        'default'   => __($label, '99Npo'),
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );

    if($type != "img"){
        $wp_customize->add_control( new WP_Customize_Control($wp_customize, $setting, array(
            'label' => __( $label, '99Npo' ),
            'section' => $section,
            'settings' => $setting,
            'type'  => $type,
            )
        ));
    }else{
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,
        $setting,
        array(
            'label'      => __( $label, 'theme_name' ),
            'section'    => $section,
            'settings'   => $setting,
            'context'    => $label
        )
        ));
    }
}

function wp_npo_add_customize_project_setting( $wp_customize ) {
    //add Project
    $wp_customize->add_section(
        'project',
        array(
            'title' => __( 'Project', '99Npo' ),
            'priority' => 20,
        )
    );
    add_project_control( $wp_customize, 'project', 'project_first_title', 'project first title', 'text');
    add_project_control( $wp_customize, 'project', 'project_first_body', 'project first body', 'textarea');
    add_project_control( $wp_customize, 'project', 'project_first_img', 'project first img', 'img');
    add_project_control( $wp_customize, 'project', 'project_first_link', 'project first link', 'text');

    add_project_control( $wp_customize, 'project', 'project_second_title', 'project second title', 'text');
    add_project_control( $wp_customize, 'project', 'project_second_body', 'project second body', 'textarea');
    add_project_control( $wp_customize, 'project', 'project_second_img', 'project second img', 'img');
    add_project_control( $wp_customize, 'project', 'project_second_link', 'project second link', 'text');

    add_project_control( $wp_customize, 'project', 'project_third_title', 'project third title', 'text');
    add_project_control( $wp_customize, 'project', 'project_third_body', 'project third body', 'textarea');
    add_project_control( $wp_customize, 'project', 'project_third_img', 'project third img', 'img');
    add_project_control( $wp_customize, 'project', 'project_third_link', 'project third link', 'text');

    add_project_control( $wp_customize, 'project', 'project_fourth_title', 'project fourth title', 'text');
    add_project_control( $wp_customize, 'project', 'project_fourth_body', 'project fourth body', 'textarea');
    add_project_control( $wp_customize, 'project', 'project_fourth_img', 'project fourth img', 'img');
    add_project_control( $wp_customize, 'project', 'project_fourth_link', 'project fourth link', 'text');

}

function wp_npo_add_customize_gallery_setting( $wp_customize ) {
    //add Gallery
    $wp_customize->add_section(
        'gallery',
        array(
            'title' => __( 'Gallery', '99Npo' ),
            'priority' => 20,
        )
    );

    add_project_control( $wp_customize, 'gallery', 'gallery_first_img', 'gallery first image', 'img');
    add_project_control( $wp_customize, 'gallery', 'gallery_second_img', 'gallery second image', 'img');
    add_project_control( $wp_customize, 'gallery', 'gallery_third_img', 'gallery thid image', 'img');
    add_project_control( $wp_customize, 'gallery', 'gallery_fourth_img', 'gallery fourth image', 'img');
    add_project_control( $wp_customize, 'gallery', 'gallery_fifth_img', 'gallery fifth image', 'img');
    add_project_control( $wp_customize, 'gallery', 'gallery_sixth_img', 'gallery sixth image', 'img');

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
            'notosanskr-opensans' => 'Noto Sans KR / Opensans',
            'nanumsquare' => 'Nanum Square'
        )
    ) ) );


    /*$wp_customize->add_setting( 'preset_color_scheme_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_color_scheme_setting', array(
        'label' => __( 'Color Scheme', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_color_scheme_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'red' => 'Red',
            'green' => 'Green',
            'orange' => 'Orange',
            'pink' => 'Pink',
        )
    ) ) );*/

    wp_npo_add_customize_jumbotron_setting($wp_customize);
    wp_npo_add_customize_process_setting($wp_customize);
    wp_npo_add_customize_curriculum_setting($wp_customize);
    wp_npo_add_customize_project_setting($wp_customize);
    wp_npo_add_customize_gallery_setting($wp_customize);

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
        'default' => __( 'Npo 테마', '99Npo' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_title_setting', array(
        'label' => __( 'Banner Title', '99Npo' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_title_setting',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_banner_tagline_setting', array(
        'default' => __( '사이트를 수정하려면 대시보드-테마디자인-사용자정의하기로 이동하세요','99Npo' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_tagline_setting', array(
        'label' => __( 'Banner Tagline', '99Npo' ),
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
        'label'    => __('Remove Header Banner', '99Npo'),
        'section'    => 'header_image',
        'type'     => 'checkbox',
    ) ) );
   
    $wp_customize->add_setting( 'header_banner_body_second', array(
        'default' => __( 'body second','99Npo' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_body_second', array(
        'label' => __( 'Second body text', '99Npo' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_body_second',
        'type' => 'textarea'
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
    ?>
    <style type="text/css">
        #page-sub-header { background: <?php echo get_theme_mod('header_bg_color_setting', '#fff'); ?>; }
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
