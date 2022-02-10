<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosun
 */

?>

<article class="blog_item">
	<div class="blog_item_img">
		<a href="<?php the_permalink(); ?>"><img class="card-img rounded-0" src="<?php the_post_thumbnail_url('post-thumbnails');?>" alt="<?php the_title();?>"/></a>
		<a href="<?php the_permalink( );?>" class="blog_item_date">
			<?php
				$date_link = 
				$post_date = get_the_date( 'j' );
				$post_month = get_the_date( 'M' );

			?>
			<h3><?php echo $post_date; ?></h3>
			<p><?php echo $post_month; ?></p>
		</a>
	</div>

	<div class="blog_details">
		<a class="d-inline-block" href="<?php the_permalink( );?>">
			<h2><?php the_title( );?></h2>
		</a>
		<a href="<?php the_permalink( );?>"> <?php the_excerpt();?> </a>
		<ul class="blog-info-link">
			<li><i class="fa fa-user" style="color: #999999" ></i>
				
					<?php
						$categories = get_the_category();
						$separetor = ', ';
						$result = '';
					
						if($categories):
							foreach ( $categories as $category ) {

								$result .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separetor;
							}
							echo trim($result, $separetor);
						endif;
					?>
			</li>
			<li>
			<?php

				$comments = get_comments_number( );
				
			?>
						<a href="<?php echo get_comments_link( );?>"><i class="fa fa-comments"></i> <?php echo $comments;?> <?php _e( 'Comments', 'bosun' );?> </a>
			
		</li>
		</ul>
	</div>
</article>
