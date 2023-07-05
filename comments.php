<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Yeni
 * @subpackage Yeni
 * @since Yeni 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {?>
		<p class="nocomments">بۇ مەزمۇننى پەقەت ئەزالار كۆرەلەيدۇ، كۆرۈش ئۈچۈن تىزىملىتىپ كىرىڭ</p>
	<?php return;
}
?>
<div class="card mb-2 rtl">
	<div>
			<?php
					$comments_number = get_comments_number();
					if ( 0 == ! $comments_number ) { ?>
		<h5 class="card-header bg-primary text-white text-center z-depth-2">
						<?php if ( 1 === $comments_number ) {
							/* translators: %s: post title */
							_x( 'One comment', 'comments title', 'Yeni' );
						} else {
							printf(
								/* translators: 1: number of comments, 2: post title */
								_nx(
									'%1$s Comment',
									'%1$s ئىنكاس بار',
									$comments_number,
									'comments title',
									'Yeni'
								),
								number_format_i18n( $comments_number )
							);
						} ?>
		</h5>
					<?php }?>
	</div>
	<div class="cancel-comment-reply">
		<p class="text-danger"><?php cancel_comment_reply_link(); ?></p>
	</div>
	<div class="card-body">
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>پىكىر يېزىش ئۈچۈن  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">تىزىملىتىپ</a> كىرىڭ </p>
	<?php else : ?>

		<form class="form" style="padding:0 12px;" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( $user_ID ) : ?>
				<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> دېگەن ئىسىم بىلەن پىكىر دەپتىرىگە كىردىڭىز <br /><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="ھېساباتتىن چىقىش">چىقىش</a></p>
			<?php else : ?>

			<div class="form-group md-form">
				<i class="fa fa-user prefix"></i>
				<label  for="author">ئىسىم ـ فامىلىڭىز:</label>
				<input class="form-control validate" type="text" name="author" id="author" value="<?php echo $comment_author; ?>"  tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
				<!--<label for="author" data-error="wrong" data-success="right">ئىسمىڭىزنى يېزىشنى ئۇنۇتماڭ</label>-->
			</div>

			<div class="form-group md-form">
				<i class="fa fa-envelope prefix"></i>
				<label for="email">ئېلخەت ئادرېسىڭىز:</label>
				<input class="form-control validate" type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
				<!--<label for="email" data-error="wrong" data-success="right">ئېلخەت ئادرېسىڭىزنى يېزىشنى ئۇنۇتماڭ</label>-->
			</div>

			<?php endif; ?>
			
			<div class="form-group md-form">
				<i class="fa fa-pencil prefix"></i>
				<label for="comment">مەزمۇن:</label>
				<textarea type="text" class="md-textarea" rows="7" name="comment" id="comment" tabindex="4"></textarea>
				<!--<label for="comment" data-error="wrong" data-success="right">دېمەكچى بولغانلىرىڭىزنى يازماپسىز</label>-->
			</div>

			<p><input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-primary z-depth-1" value="يوللاڭ" />
				<?php comment_id_fields(); ?>
			</p>
			<?php do_action('comment_form', $post->ID); ?>

		</form>
	<?php endif; // Eğer üyelik gerekliyse ve giriş yapılmamışsa ?>
	</div>
</div>
<hr>
<?php if ( have_comments() ) : ?>
	<div class="card mb-2 rtl">
		<div class="card-body">

					<div class="commentlist">
					<?php 
						wp_list_comments( array(
					'avatar_size' => 70,
					'style'       => 'div',
					'short_ping'  => true,
					'per_page' => 100,
					'reply_text'  => __( 'جاۋاب قايتۇرۇش', 'Yeni' ),
				) );
						//wp_list_comments(); 
						?>
					</div>

				<?php //mdb_pagination(); ?><hr>
			<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( '« بۇرۇنقى', 'Yeni' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'كېيىنكى »', 'Yeni' ) . '</span>' ,
		) ); ?>

			 <?php //else : // Hiç yorum yoksa gösterilecek bölüm ?>
					<?php //if ( ! comments_open() && get_comments_number() ) : ?>
						<?php //if ( is_single() ) : ?>
							<!-- <h4 class="no-comments hestia-title text-center"><?php //esc_html_e( '.پىكىر-تەكلىپ ئىقتىدارى ئېتىۋىتىلگەن' , 'Yeni' ); ?></h4> -->
						<?php //endif; ?>
					<?php //endif; ?>
					<?php //if ('open' == $post->comment_status) : ?>
					<!-- Yorum yapma açıksa ama henüz yorum yoksa.<p class="nocomments">ھازىرچە ھىچقانداق پىكىر-تەكلىپ يوق. پىكىر-تەكلىپ بېرىڭ</p> -->
					 <?php //else : // Yorum yapma kapalıysa ?><!-- <p class="nocomments">پىكىر-تەكلىپ ئىقتىدارى ئېتىۋىتىلگەن</p> -->
					<?php //endif; ?>
		</div>
	</div>
<?php endif; ?>