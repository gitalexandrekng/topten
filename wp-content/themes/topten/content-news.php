<?php
/**
 * LE CONTENT POUR LES NEWS
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div id="image">
		<?php echo the_post_thumbnail( 'thumbnail' ); ?>
	</div>
	<div id="contenu">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p><?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?></p>
	</div>
</article>
