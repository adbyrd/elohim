<?php
/**
 * Header Template
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset')  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
// If user is accessing this theme using an older version of WP
if ( function_exists( 'wp_body_open' ) ){
    wp_body_open(); 
}
?>

<header class="bg-red-500">Header</header>