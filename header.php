<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *musulman, musulmanlar, quran, hedis, hadis, nebi, nabi, resul, rasul, xiir, xier, olima, mezhep, mazhap, sual, javap, makala, maqale, yazma, yazmilar, ulinix, ulinish, peace, muslim
 * @package Yeni
 * @subpackage Yeni
 * @since Yeni 1.0
 <script async src="https://cdn.ampproject.org/v0.js"></script>
<link rel="canonical" href="https://www.musulmanlar.com">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title><?php if(is_home()){bloginfo('description');}else{bloginfo('name'); echo(" - "); the_title();} ?></title>
	<?php wp_head(); ?>
<!-- Google Tag Manager -->
<script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5PNZDW5');</script>
<!-- End Google Tag Manager -->
<!-- Clarity tracking code for http://musulmanlar.com/ --><script>    (function(c,l,a,r,i,t,y){        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);    })(window, document, "clarity", "script", "566ntvf8sc");</script>
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#4285F4">
</head>

<body <?php body_class(); ?>>
	<span itemscope itemtype="https://schema.org/Article">
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PNZDW5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <!--Navbar elegant-color-dark-->
    <nav class="navbar navbar-expand-lg navbar-dark light-blue accent-4">
        <div class="container">
            <a class="navbar-brand" href="/#"><span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img alt="logo" class="px-1" src="/wp-content/uploads/2017/12/index.png" /><meta itemprop="url" content="https://www.musulmanlar.com/wp-content/uploads/2017/12/index.png"></span><span itemprop="name" itemprop="publisher"><?php bloginfo('name');?></span></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--<ul class="navbar-nav mr-auto">-->
				  <?php
				  if ( has_nav_menu( 'navbar' ) ) {
					wp_nav_menu( array(
					'menu'              => 'navbar',
					'theme_location'    => 'navbar',
					'depth'             => 2,
					'menu_class'        => 'navbar-nav mr-auto',
					'fallback_cb'       => 'mdb_bootstrap_navwalker::fallback',
					'container'         => false,
					'walker'            => new MDBBootstrapNavMenuWalker())
					);
				  } else
				  echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
				  ?> 
				<!--</ul>-->
                <form class="form-inline search-form mx-auto"  role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="form-row">
					<div class="col" ><label class="text-white sr-only" for="s">ئىزدەش:</label></div>
                    <div class="col" ><input class="form-control rounded search-field bg-white text-primary p-2" type="text" placeholder="" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s" style="width:120px;"></div>
					<div class="col" ><button type="submit" class="btn btn-info mx-auto p-2 my-0">ئىزدەش</button></div>
				</div>
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
</header>
    