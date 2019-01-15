<?php
add_action( 'vc_before_init', 'your_prefix_vcSetAsTheme' );
function your_prefix_vcSetAsTheme() {
  vc_set_as_theme();
}

if( function_exists( 'vc_map' ) ) :

    //slider
    vc_map(array(
        "name" => "Essence Carouse",
        "base" => "essence_carousel",
        "show_settings_on_create" => false,
        "category" => "Essence",
    ));
    
    //SERVICES
    vc_map(array(
        "name" => "Services",
        "base" => "essence_services",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Our Services",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "section background color",
                "param_name" => "section_bgcolor",
                "value" => "#ffffff",
            )
        )
    ));

    //Call to Action Start
    vc_map(array(
        "name" => "Call to Action 1",
        "base" => "call_to_action_1",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Are You Ready To Get Started?",
            ),
            array(
                "type" => "textarea_html",
                "param_name" => "content",
                "heading" => "Content",
                "value" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                Lorem ipsum dolor sit amet, consectetuer",
            ),
            array(
                "type" => "textfield",
                "heading" => "Button Text",
                "param_name" => "button_text",
                "value" => "Purchase Now!",
            ),
            array(
                "type" => "textfield",
                "heading" => "Button URL",
                "param_name" => "button_url",
                "value" => "#",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "section background color",
                "param_name" => "section_bgcolor",
                "value" => "#f9f9f9",
            ),
            
        )
    ));

    //Features Section Start
    vc_map(array(
        "name" => "Features Section",
        "base" => "features",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Why Choose Us",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Section Color",
                "param_name" => "section_bgcolor",
                "value" => "#ffffff",
            ),
        )
    ));


    //Start Video promo Section
    vc_map(array(
        "name" => "Video promo Section",
        "base" => "video_promo",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "OUR INTRODUCTORY VIDEO",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subtitle",
                "value" => "Learn more about us, its only 30mins",
            ),
            array(
                "type" => "textfield",
                "heading" => "Video URL",
                "param_name" => "url",
                "value" => "https://www.youtube.com/embed/LSgBpbgTlhw",
            ),
            array(
                "type" => "attach_image",
                "heading" => "Background Image",
                "param_name" => "section_bgimg",
                "value" => "",
            ),
        )

    ));


    //Portfolio Section
    vc_map(array(
        "name" => "Portfolio Section",
        "base" => "portfolio",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "value" => "Our Works",
                "param_name" => "title", 
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
                "param_name" => "subtitle", 
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Section Color",
                "value" => "#f9f9f9",
                "param_name" => "section_bgcolor", 
            ),

        )
    ));

    //Start Pricing Table Section
    vc_map(array(
        "name" => "Pricing Table",
        "base" => "pricing",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "value" => "Pricing Plans",
                "param_name" => "title",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
                "param_name" => "subtitle",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Section Color",
                "value" => "#ffffff",
                "param_name" => "section_bgcolor", 
            ),

            //pricing box 1
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "title",
                "param_name" => "fast_pricing_title",
                "value" => "Starter Plan"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "Price",
                "param_name" => "fast_pricing_price",
                "value" => "49$"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "List 1",
                "param_name" => "fast_pricing_1s_list",
                "value" => "Consectetur adipiscing"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "List 2",
                "param_name" => "fast_pricing_2s_list",
                "value" => "Nunc luctus nulla et tellus"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "List 3",
                "param_name" => "fast_pricing_3s_list",
                "value" => "Suspendisse quis metus"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "List 4",
                "param_name" => "fast_pricing_4s_list",
                "value" => "Vestibul varius fermentum erat"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "Button Text",
                "param_name" => "fast_pricing_btn_text",
                "value" => "Get Plan"
            ),
            array(
                "group" => "First Box",
                "type" => "textfield",
                "heading" => "Button URL",
                "param_name" => "fast_pricing_btn_url",
                "value" => "#"
            ),

            //pricing box 2
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "title",
                "param_name" => "second_pricing_title",
                "value" => "Popular Plan"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "Price",
                "param_name" => "second_pricing_price",
                "value" => "99$"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "List 1",
                "param_name" => "second_pricing_1s_list",
                "value" => "Consectetur adipiscing"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "List 2",
                "param_name" => "second_pricing_2s_list",
                "value" => "Nunc luctus nulla et tellus"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "List 3",
                "param_name" => "second_pricing_3s_list",
                "value" => "Suspendisse quis metus"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "List 4",
                "param_name" => "second_pricing_4s_list",
                "value" => "Vestibul varius fermentum erat"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "Button Text",
                "param_name" => "second_pricing_btn_text",
                "value" => "Get Plan"
            ),
            array(
                "group" => "Second Box",
                "type" => "textfield",
                "heading" => "Button URL",
                "param_name" => "second_pricing_btn_url",
                "value" => "#"
            ),


            //pricing box 3
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "title",
                "param_name" => "third_pricing_title",
                "value" => "Premium Plan"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "Price",
                "param_name" => "third_pricing_price",
                "value" => "199$"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "List 1",
                "param_name" => "third_pricing_1s_list",
                "value" => "Consectetur adipiscing"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "List 2",
                "param_name" => "third_pricing_2s_list",
                "value" => "Nunc luctus nulla et tellus"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "List 3",
                "param_name" => "third_pricing_3s_list",
                "value" => "Suspendisse quis metus"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "List 4",
                "param_name" => "third_pricing_4s_list",
                "value" => "Vestibul varius fermentum erat"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "List 5",
                "param_name" => "third_pricing_5s_list",
                "value" => "Suspendisse quis metus"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "Button Text",
                "param_name" => "third_pricing_btn_text",
                "value" => "Get Plan"
            ),
            array(
                "group" => "Third Box",
                "type" => "textfield",
                "heading" => "Button URL",
                "param_name" => "third_pricing_btn_url",
                "value" => "#"
            ),

        )
    ));



    //Counter Section Start
    vc_map(array(
        "name" => "Counter",
        "base" => "counter",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "colorpicker",
                "heading" => "section color",
                "param_name" => "section_bgcolor",
                "value" => "#F97794",
            ),

            //first Counter box
            array(
                "type" => "textfield",
                "group" => "First box",
                "heading" => "Icon",
                "param_name" => "first_box_icon",
                "value" => "lni-rocket",
            ),
            array(
                "type" => "textfield",
                "group" => "First box",
                "heading" => "Title",
                "param_name" => "first_box_title",
                "value" => "Faster",
            ),
            array(
                "type" => "textfield",
                "group" => "First box",
                "heading" => "Count Number",
                "param_name" => "first_box_coun",
                "value" => "100",
            ),
            array(
                "type" => "textfield",
                "group" => "First box",
                "heading" => "Sing",
                "param_name" => "first_box_sing",
                "value" => "%",
            ),


            //Second Counter box
            array(
                "type" => "textfield",
                "group" => "Second box",
                "heading" => "Icon",
                "param_name" => "second_box_icon",
                "value" => "lni-coffee-cup",
            ),
            array(
                "type" => "textfield",
                "group" => "Second box",
                "heading" => "Title",
                "param_name" => "second_box_title",
                "value" => "Cup of Coffee",
            ),
            array(
                "type" => "textfield",
                "group" => "Second box",
                "heading" => "Count Number",
                "param_name" => "second_box_coun",
                "value" => "700",
            ),
            array(
                "type" => "textfield",
                "group" => "Second box",
                "heading" => "Sing",
                "param_name" => "second_box_sing",
                "value" => "",
            ),

            //Third Counter box
            array(
                "type" => "textfield",
                "group" => "Third box",
                "heading" => "Icon",
                "param_name" => "third_box_icon",
                "value" => "lni-user",
            ),
            array(
                "type" => "textfield",
                "group" => "Third box",
                "heading" => "Title",
                "param_name" => "third_box_title",
                "value" => "Active Clients",
            ),
            array(
                "type" => "textfield",
                "group" => "Third box",
                "heading" => "Count Number",
                "param_name" => "third_box_coun",
                "value" => "10000",
            ),
            array(
                "type" => "textfield",
                "group" => "Third box",
                "heading" => "Sing",
                "param_name" => "third_box_sing",
                "value" => "+",
            ),


            //Fourth Counter box
            array(
                "type" => "textfield",
                "group" => "Fourth box",
                "heading" => "Icon",
                "param_name" => "fourth_box_icon",
                "value" => "lni-heart",
            ),
            array(
                "type" => "textfield",
                "group" => "Fourth box",
                "heading" => "Title",
                "param_name" => "fourth_box_title",
                "value" => "Peoples Love",
            ),
            array(
                "type" => "textfield",
                "group" => "Fourth box",
                "heading" => "Count Number",
                "param_name" => "fourth_box_coun",
                "value" => "1689",
            ),
            array(
                "type" => "textfield",
                "group" => "Fourth box",
                "heading" => "Sing",
                "param_name" => "fourth_box_sing",
                "value" => "",
            ),
        )
    ));



    //Testimonial Section Start
    vc_map(array(
        "name" => "Testimonial",
        "base" => "testimonial",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Post Per Page",
                "param_name" => "post_per_page",
                "value" => "6",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "section color",
                "param_name" => "section_bgcolor",
                "value" => "#f9f9f9",
            ),
        )

    ));

    //Call To Action2 Section Start
    vc_map(array(
        "name" => "Call To Action 2",
        "base" => "call_to_action_2",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Stil confused? Download a free lite version to get started!",
            ),
            array(
                "type" => "textfield",
                "heading" => "Button Text",
                "param_name" => "button_text",
                "value" => "Download",
            ),
            array(
                "type" => "textfield",
                "heading" => "Button URL",
                "param_name" => "button_url",
                "value" => "#",
            ),
            array(
                "type" => "attach_image",
                "heading" => "Background Image",
                "param_name" => "section_bgimg",
                "value" => "",
            ),
        ),
        
    ));


    //Team section Start
    vc_map(array(
        "name" => "Team section",
        "base" => "team",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "param_name" => "post_per_page",
                "heading" => "Post Per Page",
                "value" => "3",
            ),
            array(
                "type" => "textfield",
                "param_name" => "title",
                "heading" => "Title",
                "value" => "Our Team",
            ),
            array(
                "type" => "textfield",
                "param_name" => "subtitle",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
            ),
            array(
                "type" => "colorpicker",
                "param_name" => "section_bgcolor",
                "heading" => "Section Color",
                "value" => "#ffffff",
            ),
        )


    ));


    //Subcribe Section Start
    vc_map(array(
        "name" => "Subcribe Section",
        "base" => "subcribe_box",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "attach_image",
                "param_name" => "section_bgimg",
                "heading" => "Background Image",
                "value" => "",
            ),

            //subcribe box
            array(
                "group" => "subcribe box",
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "subcribe_box_title",
                "value" => "Subscribe to Newsletter",
            ),
            array(
                "group" => "subcribe box",
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subcribe_box_subtitle",
                "value" => "Weekly Freebies and More!",
            ),
            array(
                "group" => "subcribe box",
                "type" => "textarea_html",
                "heading" => "contact form 7 shortcode",
                "param_name" => "content",
                "value" => '',
            ),

            //first subcribe sub item box
            array(
                "group" => "First Item box",
                "type" => "textfield",
                "heading" => "icon",
                "value" => "lni-bullhorn",
                "param_name" => "first_sub_item_icon",
            ),
            array(
                "group" => "First Item box",
                "type" => "textfield",
                "heading" => "Title",
                "value" => "Weekly Free Learning Materials",
                "param_name" => "first_sub_item_title",
            ),
            array(
                "group" => "First Item box",
                "type" => "textfield",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
                "param_name" => "first_sub_item_subtitle",
            ),

            
            //Second subcribe sub item box
            array(
                "group" => "Second Item box",
                "type" => "textfield",
                "heading" => "icon",
                "value" => "lni-book",
                "param_name" => "second_sub_item_icon",
            ),
            array(
                "group" => "Second Item box",
                "type" => "textfield",
                "heading" => "Title",
                "value" => "Free PDF to Get Started",
                "param_name" => "second_sub_item_title",
            ),
            array(
                "group" => "Second Item box",
                "type" => "textfield",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
                "param_name" => "second_sub_item_subtitle",
            ),


            //Third subcribe sub item box
            array(
                "group" => "Third Item box",
                "type" => "textfield",
                "heading" => "icon",
                "value" => "lni-book",
                "param_name" => "third_sub_item_icon",
            ),
            array(
                "group" => "Third Item box",
                "type" => "textfield",
                "heading" => "Title",
                "value" => "Free PDF to Get Started",
                "param_name" => "third_sub_item_title",
            ),
            array(
                "group" => "Third Item box",
                "type" => "textfield",
                "heading" => "Subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.",
                "param_name" => "third_sub_item_subtitle",
            ),


           
        ),

    ));


    // Blog Section
    vc_map(array(
        "name" => "Blog Section",
        "base" => "blog_section",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Posts Per Page",
                "param_name" => "post_per_page",
                "value" => "3",
            ),
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Blogs",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Background color",
                "param_name" => "section_bgcolor",
                "value" => "#ffffff",
            ),
            
        ),

    ));


    // Clients Section
    vc_map(array(
        "name" => "Clients Section",
        "base" => "clients",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Posts Per Page",
                "param_name" => "posts_per_page",
                "value" => "8",

            ),
            array(
                "type" => "colorpicker",
                "heading" => "Background Color",
                "param_name" => "section_bgcolor",
                "value" => "#f9f9f9",

            )
        ),
    ));


    // Contact Section Start
    vc_map(array(
        "name" => "Contact Section",
        "base" => "contact_section",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "title",
                "value" => "Get In Touch",
            ),
            array(
                "type" => "textfield",
                "heading" => "Subtitle",
                "param_name" => "subtitle",
                "value" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos debitis.",
            ),
            array(
                "type" => "textarea_html",
                "heading" => "contact form 7 shortcode",
                "param_name" => "content",
                "value" => '',
            ),
            array(
                "type" => "colorpicker",
                "heading" => "Background color",
                "param_name" => "section_bgcolor",
                "value" => "#ffffff",
            ),

            // first contact info
            array(
                "group" => "First Info Box",
                "type" => "textfield",
                "heading" => "Icon",
                "param_name" => "first_info_box_icon",
                "value" => "lni-map",
            ),
            array(
                "group" => "First Info Box",
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "first_info_box_title",
                "value" => "Location",
            ),
            array(
                "group" => "First Info Box",
                "type" => "textarea",
                "heading" => "Content",
                "param_name" => "first_info_box_subtitle",
                "value" => "1900 Pico Blvd, New York br Centernial, colorado",
            ),
            
            // Second contact info
            array(
                "group" => "Second Info Box",
                "type" => "textfield",
                "heading" => "Icon",
                "param_name" => "second_info_box_icon",
                "value" => "lni-star",
            ),
            array(
                "group" => "Second Info Box",
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "second_info_box_title",
                "value" => "E-mail",
            ),
            array(
                "group" => "Second Info Box",
                "type" => "textarea",
                "heading" => "Content",
                "param_name" => "second_info_box_subtitle",
                "value" => "info@example.com",
            ),

            // Third contact info
            array(
                "group" => "Third Info Box",
                "type" => "textfield",
                "heading" => "Icon",
                "param_name" => "third_info_box_icon",
                "value" => "lni-phone",
            ),
            array(
                "group" => "Third Info Box",
                "type" => "textfield",
                "heading" => "Title",
                "param_name" => "third_info_box_title",
                "value" => "Phone",
            ),
            array(
                "group" => "Third Info Box",
                "type" => "textarea",
                "heading" => "Content",
                "param_name" => "third_info_box_subtitle",
                "value" => "+48 123 456 789",
            ),

        ),


    ));


    // Map Section Start
    vc_map(array(
        "name" => "Map Section",
        "base" => "map",
        "category" => "Essence",
        "params" => array(
            array(
                "type" => "textfield",
                "param_name" => "url",
                "heading" => "Map URL",
                "value" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34015.943594576835!2d-106.43242624069771!3d31.677719472407432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75d90e99d597b%3A0x6cd3eb9a9fcd23f1!2sCourtyard+by+Marriott+Ciudad+Juarez!5e0!3m2!1sen!2sbd!4v1533791187584",
            )
        ),
    ));


endif;

  


