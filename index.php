<?php

get_header(); ?>
<?php 
$media_query = new WP_Query(
    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    )
);
$list = array();
foreach ($media_query->posts as $post) {
if ((int)$post->post_parent==0 && wp_attachment_is_image($post->ID))
{
	$im=wp_get_attachment_image_src($post->ID);
echo '<noscript><img src="'.$im[0].'" width="'.$im[1].'" height="'.$im[2].'" alt="'.$im[0].'"/></noscript><img alt="'.$im[0].'" class="lazy" src="'.get_bloginfo('template_url').'/css/images/blank.gif" data-original="'.$im[0].'" width="'.$im[1].'" height="'.$im[2].'"/>';

}
}
?>
		
		
			
			
			

			


<?php get_footer(); ?>
