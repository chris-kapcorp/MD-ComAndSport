<?php global $metaHome;

$args = array(
    'post_type' => 'partner',
    'posts_status' => 'publish',
    'posts_per_page' => -1
);

$partner_query = new WP_Query($args);
?>

<div id="partners">
    <h2 class="title">Nos Partenaires</h2>

    <div class="partner-infos">
        <div class="partner-show">

            <?php if ($partner_query->have_posts()) {
                while ($partner_query->have_posts()) {
                $partner_query->the_post();
                $partner_img = get_the_post_thumbnail_url(get_the_ID(), 'partner_cover');
                $partner_meta = get_post_meta(get_the_ID());
                ?>
                    <div class="partner-container">
                        <div class="partner-img">
                            <img src="<?php echo $partner_img; ?>" alt="<?php echo get_the_title(); ?>">
                            <div class="partner-rs">

                                <?php displayRsOverImg($partner_meta, 'Réseau_social_1', 'Réseau_social_2', 'socials'); ?>

                            </div>
                        </div>

                        <h2 class="partner-name">
                            <?php echo get_the_title(); ?>
                        </h2>

                    </div>
                    
                <?php }
            wp_reset_postdata();
        } ?>
        </div>
    </div>
</div>