<?php

add_action("cmb2_admin_init", "meta_box_functions");
function meta_box_functions() 
{   

    //META BOX FOR Carousel POSTS
    $carousel = new_cmb2_box(array(
        "title" => "Carousel Aditonal Filds",
        "id"    => "_aditional-for-carousel",
        "object_types" => array("essence_carousel"),
    ));
    $carousel -> add_field(array(
        "name" => "Add Carousel Image",
        "id"    => "_carousel_image",
        "type"    => "file",
        "options" => array(
            "url" => true, 
        ),
        "text"    => array(
            "add_upload_file_text" => "Add Carousel Image" 
        ),
    ));
    $carousel -> add_field(array(
        "name" => "Add Title up",
        "id"    => "_title_up",
        "default" => "Handcrafted",
        "type"  => "text",
    ));
    $carousel -> add_field(array(
        "name" => "Add Title down",
        "id"    => "_title_down",
        "default" => "Comes with All Essential Sections & Elements",
        "type"  => "text",
    ));
    $carousel -> add_field(array(
        "name" => "Carousel Design",
        "id"    => "_carousel_design",
        'type'             => 'select',
        'desc' => 'you must have to select one design, otherwise not working',
        "show_option_none" => true,
        "default"          => "design-1",
        "options"          => array(
            "design-1"      => __( "design-1", "cmb2" ),
            "design-2"      => __( "design-2", "cmb2" ),
            "design-3"      => __( "design-3", "cmb2" ),
        )
    ));
    //carousel first button
    $carouselbtn1 = new_cmb2_box(array(
        "title" => "Carousel first button Aditonal Filds",
        "id"    => "_carousel_first_btn",
        "object_types" => array("essence_carousel"),
    ));
    $carouselbtn1->add_field( array(
        'name' => 'Enable First button',
        'desc' => 'if check first button will be show in carousel',
        'id'   => '_firstbtn_checkbox',
        'type' => 'radio_inline',
        'default' => 'show',
        'options' => array(
            'show' => __( 'Show', 'cmb2' ),
            'hide'   => __( 'Hide', 'cmb2' ),
        ),
        
    ) );
    $carouselbtn1 -> add_field(array(
        "name" => "Button Text",
        "id" => "_button1_text",
        "type" => "text",
        "default" => "Download",
    ));
    $carouselbtn1 -> add_field(array(
        "name" => "Button URL",
        "id" => "_button1_url",
        "type" => "text",
        "default" => "#",
    ));
    // $carouselbtn1 -> add_field(array(
    //     "name" => "Button Color",
    //     "id" => "_button1_color",
    //     "type" => "colorpicker",
    //     "default" => "#F97794",
    // ));
    // $carouselbtn1 -> add_field(array(
    //     "name" => "Button Hover Color",
    //     "id" => "_button1_hover_color",
    //     "type" => "colorpicker",
    //     "default" => ""
    // ));
    //carousel second button
    $carouselbtn2 = new_cmb2_box(array(
        "title" => "Carousel Second button Aditonal Filds",
        "id"    => "_carousel_second_btn",
        "object_types" => array("essence_carousel"),
    ));
    $carouselbtn2->add_field( array(
        'name' => 'Enable Second button',
        'desc' => 'if check second button will be show in carousel',
        'id'   => '_secondbtn_checkbox',
        'type' => 'radio_inline',
        'default' => 'hide',
        'options' => array(
            'show' => __( 'Show', 'cmb2' ),
            'hide'   => __( 'Hide', 'cmb2' ),
        ),
    ) );
    $carouselbtn2 -> add_field(array(
        "name" => "Button Text",
        "id" => "_button2_text",
        "type" => "text",
        "default" => "Get Started!",
    ));
    $carouselbtn2 -> add_field(array(
        "name" => "Button URL",
        "id" => "_button2_url",
        "type" => "text",
        "default" => "#",
    ));
    // $carouselbtn2 -> add_field(array(
    //     "name" => "Button Color",
    //     "id" => "_button2_color",
    //     "type" => "colorpicker",
    //     "default" => "",
    // ));
    // $carouselbtn2 -> add_field(array(
    //     "name" => "Button Hover Color",
    //     "id" => "_button2_hover_color",
    //     "type" => "colorpicker",
    //     "default" => "#F97794"
    // ));







    //META BOX FOR SERVICES POSTS
    $services = new_cmb2_box(array(
        "title" => "Aditonal Filds",
        "id"    => "_aditional-for-services",
        "object_types" => array("essence_services"),
    ));
    $services -> add_field(array(
        "name" => "Add Services Icon",
        "id"    => "_services_icon",
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFaPre'
    ));
    $services -> add_field(array(
        "name" => "Icon Color",
        "id"    => "_icon_color",
        'type'             => 'select',
        "show_option_none" => true,
        "default"          => "color-6",
        "options"          => array(
            "color-1"      => __( "color-1", "cmb2" ),
            "color-2"      => __( "color-2", "cmb2" ),
            "color-3"      => __( "color-3", "cmb2" ),
            "color-4"      => __( "color-4", "cmb2" ),
            "color-5"      => __( "color-5", "cmb2" ),
            "color-6"      => __( "color-6", "cmb2" )
        )
    ));
    $services -> add_field(array(
        "name" => "Services Box Delay Show",
        "id"    => "_box_delay",
        'type'             => 'select',
        "show_option_none" => true,
        "default"          => "0.2s",
        "options"          => array(
            "0.2s"      => __( "0.2s", "cmb2" ),
            "0.4s"      => __( "0.4s", "cmb2" ),
            "0.6s"      => __( "0.6s", "cmb2" ),
            "0.8s"      => __( "0.8s", "cmb2" ),
            "1s"        => __( "1s", "cmb2" ),
            "1.2s"      => __( "1.2s", "cmb2" )
        )
    ));




    //META BOX FOR FEATURES POSTS
    $features = new_cmb2_box( array(
        "title" =>  "Features Post Aditonal Fields",
        "id"    =>  "_features_post",
        "object_types" => array("essence_features"),
    )); 
    $features -> add_field( array(
        "neme"  => "Add Feature Content",
        "id"    => "_feature_content",
        "type"  => "wysiwyg",
        "options" => array(
            'textarea_rows' => get_option('default_post_edit_rows', 5),
        ),
    ));
    $features -> add_field(array(
        "name" => "Add Feature Icon",
        "id"    => "_feature_icon",
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFaPre'
    ));


    
    //META BOX FOR Testimonial POSTS
    $testimonial = new_cmb2_box( array(
        "title" =>  "Author Infol Fields",
        "id"    =>  "_testimonial_post",
        "object_types" => array("essence_testimonial"),
    )); 
    $testimonial -> add_field(array(
        "name" => "Add Author Image",
        "id"    => "_Author_image",
        "type"    => "file",
        "options" => array(
            "url" => true, 
        ),
        "text"    => array(
            "add_upload_file_text" => "Add Author Image" 
        ),
    ));
    $testimonial -> add_field(array(
        "name" => "Add Author Name",
        "id"    => "_Author_neme",
        "type"  => "text",
    ));
    $testimonial -> add_field(array(
        "name" => "Add Author Position",
        "id"    => "_Author_position",
        "type"  => "text",
    ));
    $testimonial -> add_field(array(
        "name" => "Add Author content",
        "id"    => "_author_content",
        "type"  => "wysiwyg",
        "options" => array(
            'textarea_rows' => get_option('default_post_edit_rows', 5),
        ),
    ));




    //META BOX FOR Team POSTS
    $team_member = new_cmb2_box( array(
        "title" =>  "Team Member Infol Fields",
        "id"    =>  "_team_member_post",
        "object_types" => array("essence_team"),
    )); 
    $team_member -> add_field(array(
        "name" => "Add Team Member Image",
        "id"    => "_team_member_image",
        "type"    => "file",
        "options" => array(
            "url" => true, 
        ),
        "text"    => array(
            "add_upload_file_text" => "Add Team Member Image" 
        ),
    ));
    $team_member -> add_field(array(
        "name" => "Add Team Member Name",
        "id"    => "_team_member_neme",
        "type"  => "text",
    ));
    $team_member -> add_field(array(
        "name" => "Add Team Member Profession",
        "id"    => "_team_member_profession",
        "type"  => "text",
    ));
    
    $team_member_social  = new_cmb2_box( array(
        "title" =>  "Team Member Social Media Fields",
        "id"    =>  "_team_social_media",
        "object_types" => array("essence_team"),
    )); 
    $team_member_social -> add_field(array(
        "name" => "Add Facebook link",
        "id"    => "_team_facebook_link",
        "type"  => "text",
        "default" => "#"
    ));
    $team_member_social -> add_field(array(
        "name" => "Add Twitter link",
        "id"    => "_team_twitter_link",
        "type"  => "text",
        "default" => "#"
    ));
    $team_member_social -> add_field(array(
        "name" => "Add Google+ link",
        "id"    => "_team_google_link",
        "type"  => "text",
        "default" => "#"
    ));
    $team_member_social -> add_field(array(
        "name" => "Add LinkedIn  link",
        "id"    => "_team_linkedin_link",
        "type"  => "text",
        "default" => "#"
    ));
    



    //META BOX FOR Team POSTS
    $clients = new_cmb2_box( array(
        "title" =>  "The clients Aditonal Infol Fields",
        "id"    =>  "_clients_post",
        "object_types" => array("essence_clients_post"),
    )); 
    $clients -> add_field(array(
        "name" => "Add Clients Image",
        "id"    => "_clients_image",
        "type"  => "file",
        "options" => array(
            "url" => true, 
        ),
        "text"    => array(
            "add_upload_file_text" => "Add Clients Image" 
        ),
    ));
}