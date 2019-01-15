<div class="row justify-content-md-center">
    <div class="col-md-10">
        <div class="blog-comment">

            <h4><?php echo get_comments_number(); ?> Comments</h4>

            <ul class="comment-list">
                
                <?php function comment_layout($comment, $args, $depth) {
                    $GLOBALS['comment'] = $comment; ?>

                <li class="comment">
                    <!--for comment section-->
                    <div id="div-comment-<?php comment_ID() ?>" class="the-comment comment-body">
                        <div class="avatar">
                            <img src="<?php echo get_avatar_url($comment, $size = '60'); ?>" alt="">
                        </div>
                        <div class="comment-box ">
                            <div class="comment-author">
                                <strong>
                                    <?php comment_author(); echo " "; ?>
                                </strong><span class="meta">
                                    <?php echo get_comment_date('F d, Y'); ?> at  <?php echo get_comment_time(); ?>
                                </span>

                                <?php
                                    comment_reply_link( 
                                        array_merge( 
                                            $args, 
                                            array( 
                                                'add_below' => $add_below, 
                                                'depth'     => $depth, 
                                                'max_depth' => $args['max_depth'] 
                                            ) 
                                        ) 
                                    ); 
                                ?>

                            </div>
                            <div class="comment-text">
                                <p> <?php  comment_text(); ?></p>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
                
                <?php  
                    wp_list_comments(array(  
                        'callback' => 'comment_layout', 
                        'reply_text' => " - Reply",
                    ) ); 
                ?>
            </ul>
           

    <!-- <form id="comment-form">  -->
            
    <?php

        //to avobe the inpute filde from textarea           
        function wpb_move_comment_field_to_bottom( $fields ) {
            $comment_field = $fields['comment'];
            unset( $fields['comment'] );
            $fields['comment'] = $comment_field;
            return $fields;
        }
        add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

      
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        //input fields
        $fields = array(
            
            'author' => '<div class="row"><div class="col-md-4">
                            <div class="form-group">
                                <input  value="' . esc_attr( $commenter['comment_author'] ) . '" type="text" class="form-control" id="name" name="author" placeholder="Name" ' . $aria_req . '>
                            </div>
                        </div>',

            'email' =>  '<div class="col-md-4">
                            <div class="form-group">
                                <input  value="' . esc_attr(  $commenter['comment_author_email'] ) . '" type="text" class="form-control" id="Email" name="email" placeholder="Email" ' . $aria_req . '>
                            </div>
                        </div>',

            'url' =>    '<div class="col-md-4">
                            <div class="form-group">
                                <input value="' . esc_attr( $commenter['comment_author_url'] ) . '" type="text" class="form-control" id="Website" name="url" placeholder="Website">
                            </div>
                        </div>',

        );

        //comment form supports
        $args = array(

            'comment_notes_before' =>   '<p class="comment-notes">' . __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) . '</p>',
           
            'fields' => apply_filters("comment_form_default_fields",  $fields ),

            'comment_field' => '<div class="col-md-12"> <div class="form-group"><textarea class="form-control" id="message" placeholder="Comment" name="comment" rows="11"></textarea></div> </div></div>',

            'submit_button' => '<div class="submit-button text-center"> <button class="btn btn-common btn-effect" type="submit">Post comment</button> </div>'
        
        );

        //comment from
        comment_form( $args );
    ?>

                
                
                
    <!-- </form> -->

        </div>
    </div>
</div>