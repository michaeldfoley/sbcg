<?php
/*
Template Name: Events
*/
?>
<?php get_header(); ?>
<div id="main">
<?php query_posts('category_name=events'); ?> 
<?php if (have_posts()) : ?>                
<?php get_template_part( 'post' , 'entry') ?>
<?php else : ?>
  
  <p>Please check back for <?php echo (date('m')>10 || date('m')<04)?"next season's":"upcoming" ?>  events.</p>
<?php endif; ?><?php wp_reset_query(); ?>
            
<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>
  <h3 style="margin-top:0;"><a href="/category/past-events/">View Past Events</a></h3>
</div><!-- END Main -->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>