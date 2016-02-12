<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php include('header-perso.php'); ?>
<div id="single-post" role="main">

  <div id="single-wrapper">
    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<div id="post-<?php the_ID(); ?>">
    		<header>
    			<div id="title-single">
    			  <h1 class="entry-title"><?php the_title(); ?></h1>
    			</div>
    		</header>
    		<div class="row">
    		  <div class="large-8 columns">
            <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
        		<div class="entry-content">

        		<?php if ( has_post_thumbnail() ) : ?>
        			<div class="row">
        				<div class="column">
        					<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
        				</div>
        			</div>
        		<?php endif; ?>

        		<?php the_content(); ?>
        		</div>
            <footer>
        			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        			<p><?php the_tags(); ?></p>
        		</footer>
        		<?php do_action( 'foundationpress_post_before_comments' ); ?>
        		<?php comments_template(); ?>
        		<?php do_action( 'foundationpress_post_after_comments' ); ?>
          </div>
          <div class="large-4 columns">
            <div id="metaz">
              <h5>A propos de l'auteur</h5>
              <?php foundationpress_entry_meta(); ?>
            </div>
            <div id="metaz">
              <h5>Vous aimerez aussi</h5>
              <div class="row">
                <div class="small-12 columns"><div id="focused"><img src="http://placehold.it/350x150"><br>Article n°123902713</div></div>
                <div class="small-12 columns"><div id="focused"><img src="http://placehold.it/350x150"><br>Article n°123902713</div></div>
              </div>
            </div>
            <div id="metaz">
              <h5>Ne ratez aucune publication</h5>
              <div class="fb-page" data-href="https://www.facebook.com/marvel" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/marvel"><a href="https://www.facebook.com/marvel">Marvel</a></blockquote></div></div>
            </div>
          </div>
    		</div>

    	</div>
    <?php endwhile;?>

    <?php do_action( 'foundationpress_after_content' ); ?>
  </div>
</div>
<?php get_footer(); ?>
