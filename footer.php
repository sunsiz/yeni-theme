<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Yeni
 * @subpackage Yeni
 * @since Yeni 1.0
 */
?>
<meta itemprop="url" content="<?php echo get_permalink( $post->ID ); ?>"></span>
<h1 class="sr-only">
مۇسۇلمانلار تورى، ئاللاھ، ئاللا، قۇرئان كەرىم، مۇسۇلمان، مۇسۇلمانلار، قۇرئان، ھەدىس، ئىلىم، دىن، ئۇيغۇر، ئۇيغۇرچە، فېترەت، فىترەت، تەبىئەت، ئادەم، پەيغەمبەر، رەسۇل، نەبى، شېئىر، ئۆلىما، مەزھەپ، پەتىۋا، سۇئال، جاۋاب، ئىلمىي، تەتقىقات، ماقالە، يازمىلار، يازما، ئۇلىنىش، ئالاقىلىشىڭ
</h1>
<!--Footer elegant-color-dark-->
<footer class="page-footer blue darken-2 center-on-small-only">
       <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">
            <!--First column-->
            <!-- <div class="col-lg-3 col-md-6 ml-auto">
                <h5 class="title mb-3">مۇسۇلمانلار تورى</h5>
                <p>مۇسۇلمانلار - ئاللاھقا تەسلىم بولغان كىشىلەردۇر</p>
            </div> -->
			<div class="col-lg-3 col-md-6 ml-auto">
			  <?php if ( is_active_sidebar( 'footer' ) ) : ?>
			  <?php dynamic_sidebar( 'footer' ); ?>
			  <?php endif; ?>
			</div>
            <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

            <!--Second column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">پائالىيەتلىرىمىز</h5>
				<?php
				wp_nav_menu( array(
				'menu'              => 'footer1',
				'theme_location'    => 'footer1',
				'depth'             => 1
				)
				);
				?>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">ھەققىمىزدە</h5>
                <?php
				wp_nav_menu( array(
				'menu'              => 'footer2',
				'theme_location'    => 'footer2',
				'depth'             => 1
				)
				);
				?>

            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-lg-2 col-md-6 ml-auto">
                <h5 class="title mb-3">ئالاقە</h5>
				<?php
				wp_nav_menu( array(
				'menu'              => 'footer3',
				'theme_location'    => 'footer3',
				'depth'             => 1
				)
				);
				?>

            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2020 Copyright: <a href="https://www.musulmanlar.com"  rel="nofollow"> www.musulmanlar.com </a>
        </div>
    </div>
    <!--/.Copyright-->
<div class="sr-only" itemscope itemtype="https://schema.org/WebSite">
  <meta itemprop="url" content="https://www.musulmanlar.com/"/>
  <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
    <meta itemprop="target" content="https://www.musulmanlar.com/?s={search_term_string}"/>
    <input itemprop="query-input" type="text" name="search_term_string" required hidden/>
    <input type="submit" hidden/>
  </form>
</div>
<span class="sr-only" itemscope itemtype="https://schema.org/Organization">
  <link itemprop="url" href="https://www.musulmanlar.com">
  <a itemprop="sameAs" href="https://www.facebook.com/Musulmanlar">FaceBook</a>
  <a itemprop="sameAs" href="https://twitter.com/musulmanlar">Twitter</a>
  <a itemprop="sameAs" href="https://www.linkedin.com/in/musulmanlar-1-769530154">LinkedIn</a>
  <a itemprop="sameAs" href="https://plus.google.com/u/0/105435001997458220946">Google +</a>
</span>
<span class="sr-only" itemscope itemtype="https://schema.org/Organization">
  <link itemprop="url" href="https://www.musulmanlar.com">
  <img itemprop="logo" alt="مۇسۇلمانلار تورى" src="https://www.musulmanlar.com/wp-content/uploads/2017/12/index.png"/>
</span>
</footer>
<!--/.Footer-->
<?php wp_footer(); ?>
<script>
$("#mdb-navigation > ul > li").addClass("page-item");
$("#mdb-navigation > ul > li > a").addClass("page-link");
$('meta[property="og:locale"]').attr('content',"ug_CN" );
	$('#sidebar').replaceWith(function() {
    var txt = $(this).text();
    return '<a href="https://www.uyquran.com" target="_blank" rel="noreferrer"><span id="sidebar">' + txt + '</span></a>';
});
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5751190-22']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  if ('serviceWorker' in navigator) {
                window.addEventListener('load', function () {
                    navigator.serviceWorker.register('/workerservice.js').then(function (registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function (err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
  })();
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KJ4S5P02DY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KJ4S5P02DY');
</script>

</body>
</html> 