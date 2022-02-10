<?php
/**
 * Bosun Custom template  functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bosun
 */


// Custom search Form
function bosun_search_form( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '">
        <div class="form-group">
            <div class="input-group mb-3">

            <input type="text" class="form-control search-field"
            placeholder="'. esc_attr_x( 'Search Keyword', 'bosun' ) .'"
            value="' . get_search_query() . '" name="s"/>

                <div class="input-group-append">
                    <button class="btns" type="button"><i class="ti-search"></i></button>
                </div>
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" >Search</button>
    </form>';
 

    return $form;
}
add_filter( 'get_search_form', 'bosun_search_form' );



//Custom comment reply area
function mytheme_comment( $comment, $args, $depth ) {

        if ( 'div' === $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
    <<?php echo $tag; ?><?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' );?> id="comment-<?php comment_ID()?>"><?php

    if ( 'div' != $args['style'] ) {?>
        <div id="div-comment-<?php comment_ID()?>" class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
            <?php } ?>
                <div class="comment-author thumb">
                    <?php
                        if ( $args['avatar_size'] != 0 ) {
                            echo get_avatar( $comment, $args['avatar_size'] );
                        } 
                    ?>   
                </div>
                <div class="desc">
                    <p class="comment"><?php comment_text();?></p> 
                        <?php if ( $comment->comment_approved == '0' ) { ?>
                            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' );?></em><br/>
                        <?php } ?>  
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                            /* translators: 1: date, 2: time */
                            
                                printf( __( '<h5><a class="fn">%s</a></h5>' ), get_comment_author_link() );
                                printf(
                                    __( '<p class="date">%1$s at %2$s</p>' ),
                                    get_comment_date(),
                                    get_comment_time()
                                    );?>
                            </a> 
                        </div>
                     
                    </div>
                </div>
             </div>
              
            <?php edit_comment_link( __( '(Edit)' ), '  ', '' );?>
            <?php if ( 'div' != $args['style'] ): ?>
               <div class="reply-btn">
                    <a class="btn-reply text-uppercase" href="<?php comment_reply_link( array_merge( $args,array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );?>"></a>
                </div>  
        </div> <?php endif;
}

//Comment number filter
add_filter( 'comments_number', 'bosun_com_num', 10, 2 );
function bosun_com_num( $out, $num ) {
// Two parameter as in filter described
    if ( 0 === $num ) {
        $out = '0 Comments'; // If No comments
    } elseif ( 1 === $num ) {
        $out = '1 Comment'; // If 1 comment
    } else {
        $out = $num . ' Comments'; // More than 1 comment
    }

    return $out;
}
