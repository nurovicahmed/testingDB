<?php

/*
Template Name: Weiterleitung zur ersten Unterseite
*/
global $post;
$unterseiten = get_pages("child_of=" . $post->ID . "&sort_column=menu_order");
if ($unterseiten) {
    $ersteunterseite = $unterseiten[0];
    wp_redirect(get_permalink($ersteunterseite->ID));
}