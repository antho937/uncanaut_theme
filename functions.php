<?php

/*Customizer Code HERE*/
function header_custom_text($wp_customize){
  $wp_customize->add_section("header_text", array(
    "title" => __("header text", "titre du site"),
		"priority" => 1,
  ));

  // color settings

  $wp_customize->add_setting("header_text_color", array(
    "default" => "#000000",
    "transport" => "refresh",
  ));

  // text settings

  $wp_customize->add_setting("header_text_control", array(
		"default" => "titre du site",
		"transport" => "refresh",
	));

  // controls settings

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"header_text",
		array(
			"label" => __("Enter header text", "headertext_slug"),
			"section" => "header_text",
			"settings" => "header_text_control",
			"type" => "textarea",
		)
	));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_text_color',array(
      "label" =>  __( 'Header Color', 'mytheme' ),
      "section" => "header_text",
      "settings" => "header_text_color"
  )));


  $wp_customize->add_setting("overlay_controller", array(
    "default" => "#FFFFFF"
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'overlay_controller',array(
      "label" =>  __( 'Header overlay', 'uncanaut' ),
      "section" => "header_text",
      "settings" => "overlay_controller"
  )));
}


function header_bg_action($wp_customize){
  $wp_customize->add_section("background_image", array(
    "title" => __("header background image", "fond d'image du site web"),
    "priority" => 2
  ));

  $wp_customize->add_setting("header-bg", array(
    "default"=> "http://toucharcade.com/wp-content/uploads/2014/11/Crossy-Road-1.jpg",
    "transport" => "refresh"
  ));

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'header-background',
           array(
               'label'      => __( 'Upload your background image', 'uncanaut' ),
               'section'    => 'background_image',
               'settings'   => 'header-bg'
           )
       )
   );
}

function header_logo($wp_customize){
  $wp_customize->add_section("logo_section", array(
    "title" => __("Logo du site", "Logo du site de uncanaut"),
    "priority" => 2
  ));

  $wp_customize->add_setting("logo_controller", array(
    "default"=> "nothing",
    "transport" => "refresh"
  ));

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Upload your logo', 'uncanaut' ),
               'section'    => 'logo_section',
               'settings'   => 'logo_controller'
           )
       )
   );
}


function content_ctrl($wp_customize){
  $wp_customize->add_section('content', array(
    "title" => __("Contenu", "content"),
    "priority" => 3
  ));

  $wp_customize->add_setting("contCtrl", array(
    "default" => "nothing",
    "transport" => "refresh"
  ));

  $wp_customize->add_setting("textColor", array(
    "default" => "#FFFFFF",
    "transport" => "refresh"
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'textColor',array(
      "label" =>  __( 'text color', 'uncanaut' ),
      "section" => "content",
      "settings" => "textColor"
  )));

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'logo',
           array(
               'label'      => __( 'Upload your background image', 'uncanaut' ),
               'section'    => 'content',
               'settings'   => 'contCtrl'
           )
       )
   );
}


function people_ctrl($wp_customize){
  $wp_customize->add_section('people', array(
    "title" => __("People", "membre de l'entrerpise"),
    "priority" => 3
  ));

  $wp_customize->add_setting("titlePeople",array(
    "default" => "a enthusiastic team"
  ));

  $wp_customize->add_setting("contentPeople", array(
    "default" => "un test"
  ));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"people",
		array(
			"label" => __("Enter title", "a enthusiastic team"),
			"section" => "people",
			"settings" => "titlePeople",
			"type" => "textarea",
		)
	));

  $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		"contentPeople",
		array(
			"label" => __("Enter your content", "an enthusiastic team"),
			"section" => "people",
			"settings" => "contentPeople",
			"type" => "textarea",
		)
	));
}

add_action('customize_register','header_custom_text');
add_action('customize_register','header_bg_action');
add_action('customize_register','header_logo');
add_action('customize_register','content_ctrl');
add_action('customize_register', 'people_ctrl');

?>
