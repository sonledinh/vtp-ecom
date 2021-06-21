<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vtp-ecom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="header-top">
     <div class="container">
        <div class="row align-items-center">
           <div class="col-md-3">
              <div class="logo"><a href=""><img src="<?php echo get_field('img_logo','option')['url'] ?>" class="img-fluid" alt=""></a></div>
           </div>
           <div class="col-md-6">
              <div class="h-menu">
                 <?php
                     wp_nav_menu(
                        array(
                           'theme_location' => 'menu-1',
                           'menu_id'        => 'primary-menu',
                        )
                     );
                  ?>
              </div>
           </div>
           <div class="col-md-3">
              <div class="box-search">
                  <form method="GET" action="/ecom/tim-kiem">
                    <input type="text" name="search" placeholder="Tìm kiếm ...">
                    <button type="submit"><img src="<?php echo __BASE_URL__ ?>/images/search.png" class="img-fluid" alt=""></button>
                 </form>
              </div>
           </div>
        </div>
     </div> 
  </div>
  <div class="header-mobile" style="display: none">
     <div class="container">
        <div class="row align-items-center">
           <div class="col-6 col-sm-6">
              <div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
           </div>
           <div class="col-6 col-sm-6 text-right">
              <div class="header"><a href="#menu"><i class="fa fa-bars"></i></a></div>
           </div>
        </div>
     </div>
     <nav id="menu">
         <li class="search-mb">
            <form method="GET" action="/ecom/tim-kiem">
                 <input type="text" name="search" placeholder="Tìm kiếm">
                 <button type="submit">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M19.25 19.25L15.5 15.5L19.25 19.25ZM4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z" stroke="#00AD68" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     </svg>
                 </button>
              </form>
         </li>
         <?php
            wp_nav_menu(
               array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
               )
            );
         ?>
     </nav>
  </div>
</header>