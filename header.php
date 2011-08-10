<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Acaira
 * @since Acaira 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'acaira' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
  <div id='header'>
    <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <img src='/wp-content/themes/acaira/images/header.png' />
    </a>
  </div><!-- #header -->
  <div id='nav'>
    <div class='navlink'><a href='/cat/editorial'> <img src='/wp-content/themes/acaira/images/EditorialHi.png'  class='hi' /><img src='/wp-content/themes/acaira/images/Editorial.png'  class='lo' /></a></div>
    <div class='navlink'><a href='/cat/sports'>    <img src='/wp-content/themes/acaira/images/SportsHi.png'     class='hi' /><img src='/wp-content/themes/acaira/images/Sports.png'     class='lo' /></a></div>
    <div class='navlink'><a href='/cat/portraits'> <img src='/wp-content/themes/acaira/images/PortraitsHi.png'  class='hi' /><img src='/wp-content/themes/acaira/images/Portraits.png'  class='lo' /></a></div>
    <div class='navlink'><a href='/cat/multimedia'><img src='/wp-content/themes/acaira/images/MultimediaHi.png' class='hi' /><img src='/wp-content/themes/acaira/images/Multimedia.png' class='lo' /></a></div>
    <div class='navlink'><a href='/cat/events'>    <img src='/wp-content/themes/acaira/images/EventsHi.png'     class='hi' /><img src='/wp-content/themes/acaira/images/Events.png'     class='lo' /></a></div>
    <div class='navlink'><a href='/cat/recent'>    <img src='/wp-content/themes/acaira/images/RecentHi.png'     class='hi' /><img src='/wp-content/themes/acaira/images/Recent.png'     class='lo' /></a></div>
    <div class='navlink'><a href='/about'>         <img src='/wp-content/themes/acaira/images/AboutHi.png'      class='hi' /><img src='/wp-content/themes/acaira/images/About.png'      class='lo' /></a></div>
  </div>
  <div id='main'>