<!--Post-->
<article itemscope itemtype="https://schema.org/BlogPosting">
<div class="card mb-3">
	<!--Post data--><header>
	<a itemprop="url" href="<?php echo get_permalink() ?>">
		<h5 itemprop="headline" class="card-header text-center text-white bg-primary rtl z-depth-2"><?php the_title(); ?></h5>
	</a></header>
	<div class="card-body rtl">
		<div class="card-subtitle mb-2 text-muted"><span class="mx-2 <?php //if(is_page()) echo "d-none" ?>"><a href="<?php bloginfo('url'); ?>">باش بەت</a> > <?php $categories = get_the_category();$separator = ' > ';$output = '';if ( ! empty( $categories ) ) {foreach($categories as $category) { $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'Yeni' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;} echo trim( $output, $separator ); } ?></span></a>  يوللىغۇچى: <span itemprop="author" itemscope itemtype="https://schema.org/Person"><a itemprop="author.url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span itemprop="author.name"><?php the_author(); ?></span></a></span>، ۋاقتى: <time itemprop="datePublished" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
			<div id="sosyal" class="social-section btn-group" role="group">
				<a class=" btn-floating btn-small waves-effect waves-light" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank" title="ئورتاقلىشىڭ" rel="noreferrer"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				<a class=" btn-floating btn-small waves-effect waves-light" href="https://twitter.com/home?status=<?php the_title() ?> <?php  the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" title="ئورتاقلىشىڭ" rel="noreferrer"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a class=" btn-floating btn-small waves-effect waves-light" href="https://api.whatsapp.com/send?text=<?php the_title() ?> <?php echo rawurlencode(trackback_url(false)); ?>" target="_blank" title="ئورتاقلىشىڭ" rel="noreferrer"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
				<div id="goruntuleme"> <?php if(function_exists('the_views')) { the_views(); } ?></div>
			</div> <?php edit_post_link( __( 'تەھرىرلەش', 'Yeni' ), '<span><u>', '</u></span>', null, 'mx-2' ); ?>
		</div>
	<!-- Grid row -->
	<div class="row">
		<!-- Grid column -->
		<div class="col-md-4 offset-md-1 mt-2 mx-2 p-0">
			<!--<br>Featured image -->
			<div class="view overlay z-depth-1-half">
				<?php if ( has_post_thumbnail() ){the_post_thumbnail( 'full', array( 'class'=> 'img-fluid z-depth-2'));}else{echo  '<img src="https://www.musulmanlar.com/wp-content/uploads/2019/09/2.png" alt="'.esc_attr( get_the_title( $post_id ) ).'" />' ;} ?>
				<a href="<?php echo get_permalink() ?>"><div class="mask"></div></a>
			</div>
		</div>
		<!-- /Grid column -->
		<!-- Grid column -->
		<div class="col-md-7 mr-3 mt-2 p-0">
			<span itemprop="articleBody"><?php if (!is_singular()){ the_excerpt(); } else { the_content(); } ?></span>
		</div>
		<!-- /Grid column -->
		</div>
	<!-- /Grid row -->
	</div>
</div>
<!--/.Post-->