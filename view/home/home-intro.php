<?php
global $all;


    $args = array(
        'post_type' => 'slider',
        'posts_status' => 'publish',
        'posts-per_page' => -1
    );

    $slides_query = new WP_Query($args);
?>
<div id="intro">
    <div class="flexslider" id="head-diapo">
        <ul class="slides">
            <?php
                if($slides_query->have_posts()){
                    while($slides_query->have_posts()){
                        $slides_query->the_post();
                        $diapo = get_the_post_thumbnail_url(get_the_ID(), 'diapo');
            ?>

                <li>
                    <img src="<?php echo $diapo; ?>" alt="<?php echo get_the_title(); ?>"/>
                </li>

                <?php    }
                wp_reset_postdata();
                }
                ?>
        </ul>
    </div>
</div>


