<?php

function debug($var,$height = 200,$fixed = false)
{
    $backt = debug_backtrace()[0];
    if($fixed) {
        echo '<pre style="position: fixed;top:0;left:0;right:0;height:'.$height.'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 220px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    } else {
        echo '<pre style="height:'.$height.'px;z-index:999999;overflow-y: scroll;font-size:.8em;padding: 10px 10px 10px 10px; font-family: Consolas, Monospace; background-color: #000; color: #fff;">';
    }
    echo '<p style="font-size:.85rem;">'.$backt['file'].' - '.$backt['line'].'</p>';
    print_r($var);
    echo '</pre>';
}

function path($slug) {
    return esc_url( home_url( $slug ));
}

function asset($file) {
    return get_template_directory_uri() . '/asset/' . $file;
}

function thumbnail_display($posts_query, $size){
    if ( $posts_query->have_posts() ) {
        while ( $posts_query->have_posts() ) {
            $posts_query->the_post();
            return $img_url = get_the_post_thumbnail_url(get_the_ID(), $size);
        }
    }
    wp_reset_postdata();
}

function display_text($meta, $key){
    if (!empty($meta[$key])){
        return $meta[$key][0];
    }
    return '';
}

function display_img($meta, $key, $size){
    if (!empty($meta[$key])){
        $img = wp_get_attachment_image_src($meta[$key][0], $size);
        return '<img src="'.$img[0].'" alt="">';
    }
    return '';
}

function getImgId($id, $size) {
    $img = wp_get_attachment_image_src($id, $size);?>
    <img src="<?php echo $img[0] ?>" alt="">
<?php } ?>