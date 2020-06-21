<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function wildbirds_customize_register($wp_customize){
  //All our sections, settings, and controls will be added here
  
  //-------------------------------- BACKGROUND COLOR -----------------------------------------------//
  $wp_customize->add_setting( 'wildbirds_backgroundColor' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wildbirds_backgroundColor', array(
    'label'      => __( 'Background Colour', 'wildbirds' ),
    'description' => 'Change the background Colour',
    'section'    => 'colors',
    'settings'   => 'wildbirds_backgroundColor',
  ) ) );


  $wp_customize->add_section('homepage_content', array(
    'title' => __('Homepage Content', 'wildbirds'),
    'description' => sprintf(__('Options for home page','wildbirds')),
    'priority' => 130
));
$wp_customize->add_setting('homepage_banner_image', array(
    'default' => get_bloginfo('template_directory').'/images/glennstory.jpg',
    
    'type' => 'theme_mod'
));

// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'homepage_banner_image', array(
//   'label' => __('Banner Image', 'wildbirds'),
//   'section' => 'homepage_content',
//   'settings' => 'homepage_banner_image',
//   'priority'=> 1
// )));

}//end function

//-------------------------------- FOOTER MESSAGE -----------------------------------------------//
// Add a footer/copyright information section.
// $wp_customize->add_section( 'wildbirds_footerSection' , array(
//   'title' => __( 'Footer', 'wildbirds' ),
//   'priority' => 105, // Before Widgets.
// ) );

// $wp_customize->add_setting( 'garden_footerMessage' , array(
//   'default'   => 'copyright@2020',
//   'transport' => 'refresh',
// ) );

// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'garden_footerMessageControl', array(
// 'label'      => __( 'Footer Text', 'gardenTheme' ),
// 'section'    => 'garden_footerSection',
// 'settings'   => 'garden_footerMessage',
// ) ) );



add_action('customize_register', 'wildbirds_customize_register');


//hook2: wp_head to output custom-generated CSS
function wildbirds_customize_css()
{
  ?>
  <style type="text/css">
    body {
      background-color: <?php echo get_theme_mod('wildbirds_backgroundColor','#ffffff'); ?>!important;
    }
  </style>
<?php
}
add_action( 'wp_head', 'wildbirds_customize_css'); ?>