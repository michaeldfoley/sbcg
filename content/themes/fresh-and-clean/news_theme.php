<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
<div id="main" class="full-width">
<?php query_posts('category_name=news'); ?> 
<?php if (have_posts()) : ?>                
<?php get_template_part( 'post' , 'entry') ?>                	
<?php endif; ?><?php wp_reset_query(); ?>
            
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
</div><!-- END Main -->	
<?php get_footer(); ?>