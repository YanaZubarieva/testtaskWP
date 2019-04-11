<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

 
function my_woocommerce_get_price($price, $_product) {
    $kurs = 58; // курс валюты
    $new_price = $price * $kurs;
    return $new_price; // новая цена
}
add_filter('woocommerce_get_price', 'my_woocommerce_get_price',100,2);

?>

