<?php

/* Template Name: Mentions Légales */

global $all;
global $metaHome;
$metaMentions = get_post_meta($all['page']['mentions']['id']);

get_header();
?>
<div id="mentions">
    <div class="wrap">
        <h2 class="title"><?php echo get_the_title(); ?></h2>

        <p class="content-mentions"><?php echo nl2br(get_the_content()); ?></p>
    </div>
</div>





<?php get_footer();