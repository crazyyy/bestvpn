<?php

/**
 * Add our field to the comment form
 */
add_action( 'comment_form_logged_in_after', 'wp_review_comment_fields' );
add_action( 'comment_form_after_fields', 'wp_review_comment_fields' );
function wp_review_comment_fields() {
    global $post;
    $allowUsers  = get_post_meta( $post->ID, 'wp_review_userReview', true );
    // Reviews through comments: enabled by default
    $review_through_comment = get_post_meta( $post->ID, 'wp_review_through_comment', true );    
    $custom_fields = get_post_custom();
    if (!isset($custom_fields['wp_review_through_comment'])) $review_through_comment = 1;

    if( is_array( $allowUsers ) && $allowUsers[0] == 1 && $review_through_comment ){
        $allowedClass = 'allowed-to-rate';
        $hasNotRatedClass = 'has-not-rated-yet';
        $userReview = 0;
        $user_id = '';
        if ( is_user_logged_in() ) { $user_id = get_current_user_id(); }
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        if( hasPreviousReview( $post->ID, $user_id, $ip )) {
            $hasNotRatedClass = '';
            $allowedClass = '';
            $userReview = getPreviousReview( $post->ID, $user_id, $ip );
        }
        $review = '<div class="wp-review-comment-field '.$allowedClass.' '.$hasNotRatedClass.'">';
        $review .= '<span class="review-comment-field-msg">'.__('Rating', 'wp-review').'</span>';
        $review .= '<div class="review-total-star-comments" >';
            $review .= '<div class="review-result-wrapper">';
                $review .= '<a data-input-value="1" title="1/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="2" title="2/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="3" title="3/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="4" title="4/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="5" title="5/5"><i class="mts-icon-star"></i></a>';
                $review .= '<div class="review-result" style="width:' . $userReview*20 . '%;">';                         
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star" style=""></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                $review .= '</div><!-- .review-result -->';
            $review .= '</div><!-- .review-result-wrapper -->';
        $review .= '</div><!-- .review-star -->';
        $review .= '<input type="hidden" id="wp_review_comment_rating" name="wp_review_comment_rating" value="'.$userReview.'" />';
        $review .= '</div><!-- .wp-review-comments-field -->';

        echo $review;
    }
}
 
/**
 * Add the title to our admin area, for editing, etc
 */
add_action( 'add_meta_boxes_comment', 'wp_review_comment_add_meta_box' );
function wp_review_comment_add_meta_box() {
    add_meta_box( 'wp-review-comment-rating', __( 'WP Review Rating' ), 'wp_review_comment_meta_box_cb', 'comment', 'normal', 'high' );
}
 
function wp_review_comment_meta_box_cb( $comment ) {
    $rating = get_comment_meta( $comment->comment_ID, 'wp_review_comment_rating', true );
    if (!$rating) $rating = 0;
    wp_nonce_field( 'wp_review_comment_rating_update', 'wp_review_comment_rating_update', false );
    ?>
    <p>
        <!-- <label for="wp_review_comment_rating"><?php _e( 'Rating' ); ?></label>
        --><input type="number" min="0" max="5" step="1" name="wp_review_comment_rating" value="<?php echo esc_attr( $rating ); ?>" />
    </p>
    <?php
}
 
/**
 * Save our comment (from the admin area)
 */
add_action( 'edit_comment', 'wp_review_comment_edit_comment' );
function wp_review_comment_edit_comment( $comment_id ) {
    if( ! isset( $_POST['wp_review_comment_rating'] ) || ! wp_verify_nonce( $_POST['wp_review_comment_rating_update'], 'wp_review_comment_rating_update' ) ) return;
    if( isset( $_POST['wp_review_comment_rating'] ) ){
        update_comment_meta( $comment_id, 'wp_review_comment_rating', esc_attr( $_POST['wp_review_comment_rating'] ) );
    }
}
 
/**
 * Save our title (from the front end)
 */
add_action( 'comment_post', 'wp_review_comment_insert_comment', 10, 1 );
function wp_review_comment_insert_comment( $comment_id ) {
    if( isset( $_POST['wp_review_comment_rating'] ) ) {
        update_comment_meta( $comment_id, 'wp_review_comment_rating', esc_attr( $_POST['wp_review_comment_rating'] ) );
        // add rating to custom table if not already added
        wp_review_save_comment_rating();
    }
}
function wp_review_save_comment_rating() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . MTS_WP_REVIEW_DB_TABLE;
    if (function_exists('is_multisite') && is_multisite()) {$table_name = $wpdb->base_prefix . MTS_WP_REVIEW_DB_TABLE;}
    
    global $blog_id;
    $post_id = intval($_POST['comment_post_ID']);
    $user_id = '';
    if ( is_user_logged_in() ) { $user_id = get_current_user_id(); }
    
    //$ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $uip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $uip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $uip = $_SERVER['REMOTE_ADDR'];
    }

    if (!hasPreviousReview($post_id, $user_id, $uip)) {
        $data = intval($_POST['wp_review_comment_rating']);
        if( $rows_affected = $wpdb->insert( $table_name, array('blog_id' => $blog_id, 'post_id' => $post_id, 'user_id' => $user_id, 'user_ip' => $uip, 'rate' => $data, 'date' => current_time('mysql')) ) ){
            $reviews = $wpdb->get_row( $wpdb->prepare("SELECT ROUND( AVG(rate) ,1 ) as reviewsAvg, COUNT(id) as reviewsNum FROM $table_name WHERE blog_id = '%d' AND post_id = '%d'", $blog_id, $post_id) );
            //echo $reviews->reviewsAvg.'|'.$reviews->reviewsNum; 
        } else {
            //echo 'MTS_REVIEW_DB_ERROR';
        } 
    } else {
        //echo 'MTS_REVIEW_DB_ERROR';
    }
}
 
 
/**
 * add our headline to the comment text
 * Hook in way late to avoid colliding with default
 * WordPress comment text filters
 */
add_filter( 'comment_text', 'wp_review_comment_add_title_to_text', 99, 2 );
function wp_review_comment_add_title_to_text( $text, $comment ) {
    if( is_admin() ) return $text;
    global $post;
    $allowUsers  = get_post_meta( $post->ID, 'wp_review_userReview', true );
    // Reviews through comments: enabled by default
    $review_through_comment = get_post_meta( $post->ID, 'wp_review_through_comment', true );    
    $custom_fields = get_post_custom();
    if (!isset($custom_fields['wp_review_through_comment'])) $review_through_comment = 1;

    if( is_array( $allowUsers ) && $allowUsers[0] == 1 && $review_through_comment && $rating = get_comment_meta( $comment->comment_ID, 'wp_review_comment_rating', true ) ) {
        $review = '<div class="wp-review-comment-rating">';
        $review .= '<div class="review-total-star-comments" >';
            $review .= '<div class="review-result-wrapper">';
                $review .= '<a data-input-value="1" title="1/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="2" title="2/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="3" title="3/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="4" title="4/5"><i class="mts-icon-star"></i></a>';
                $review .= '<a data-input-value="5" title="5/5"><i class="mts-icon-star"></i></a>';
                $review .= '<div class="review-result" style="width:' . $rating*20 . '%;">';                         
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                    $review .= '<i class="mts-icon-star" style=""></i>';
                    $review .= '<i class="mts-icon-star"></i>';
                $review .= '</div><!-- .review-result -->';
            $review .= '</div><!-- .review-result-wrapper -->';
        $review .= '</div><!-- .review-star -->';
        $review .= '</div><!-- .wp-review-comments-field -->';

        $text = $review . '<div class="comment-text-inner">' . $text . '</div>';
    }
    return $text;
}
 
 
// update 2012-09-12 to show how to put the title in the comments list table
 
add_action('load-edit-comments.php', 'wp_review_comment_load');
function wp_review_comment_load() {
    $screen = get_current_screen();
 
    add_filter("manage_{$screen->id}_columns", 'wp_review_comment_add_columns');
}
 
function wp_review_comment_add_columns($cols) {
    $cols['wp_review_comment_rating'] = __('WP Review Rating', 'wp-review');
    return $cols;
}
 
add_action('manage_comments_custom_column', 'wp_review_comment_column_cb', 10, 2);
function wp_review_comment_column_cb($col, $comment_id) {
    // you could expand the switch to take care of other custom columns
    switch($col) {
        case 'wp_review_comment_rating':
            if ($t = get_comment_meta($comment_id, 'wp_review_comment_rating', true)) {
                echo esc_html($t);
            } else {
                esc_html_e('No Rating', 'wp-review');
            }
            break;
    }
}