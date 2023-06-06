<?php global $metaHome;
global $all;

$args = array(
    'post_type' => 'actu',
    'posts_status' => 'publish',
    'order' => 'ASC',
    'posts_per_page' => 3
);
$actu_query = new WP_Query($args);
?>

<div id="actus">
    <div class="wrap">
        <h2 class="title">Dernières Actualités</h2>

        <div class="actus-container">
            <div class="actu-show">

                <?php if ($actu_query->have_posts()) {
                    $count = 0;
                    while ($actu_query->have_posts()) {
                        $count++;
                        $actu_query->the_post();
                        $img_actu = get_the_post_thumbnail_url(get_the_ID(), 'actu_cover');
                        $meta_actu = get_post_meta(get_the_ID());
                        $is_reverse = ($count % 2 === 0) ? 'reverse' : '';
                        ?>

                        <div class="actu-box <?php echo $is_reverse; ?>">
                            <a href=""><img src="<?php echo $img_actu; ?>" alt="<?php echo get_the_title(); ?>"></a>

                            <div class="actu-infos">
                                <a href="">
                                    <h2 class="actu-title">
                                        <?php echo get_the_title(); ?>
                                    </h2>
                                    <p class="desc-actu">
                                        <?php echo $meta_actu['résumé_actu'][0]; ?>
                                    </p>
                                </a>
                            </div>
                        </div>

                    <?php }
                    wp_reset_postdata();
                } ?>
            </div>
        </div>

        <div class="actus-more">
            <h2 class="title more-text">Voir plus</h2>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
    </div>
</div>