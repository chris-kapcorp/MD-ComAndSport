<?php global $metaHome;
global $all;

$args = array(
    'post_type' => 'actu',
    'posts_status' => 'publish',
    'order' => 'DESC',
    'posts_per_page' => 3
);
$actu_query = new WP_Query($args);
?>

<div id="actus">
    <div class="wrap">
        <h2 class="title">Dernières Actualités</h2>

        <div class="actus-container">
            <div class="actu-show"></div>
        </div>

        <div class="actus-more">
            <h2 class="title more-text">Voir plus</h2>
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
        </div>
    </div>
</div>