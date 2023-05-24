<?php

/* Template Name: Homepage */

get_header();

get_template_part('view/home/home', 'intro');
get_template_part('view/home/home', 'infos');
get_template_part('view/home/home', 'actus');
get_template_part('view/home/home', 'partenaires');
get_template_part('view/home/home', 'contact');

get_footer();