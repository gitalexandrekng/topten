<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php
$texte = "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre."; ?>

<div id="banniere">
  <div class="content">
    <div class="texte">
      <h3>Spiderman vs deadpool #1</h3>
      <a href="" class="callto">Découvrir</a>
    </div>
  </div>
</div>

<!-- LES RONDS -->
<div class="bubble">
  <div id="solo">
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
  </div>
  <div id="solo">
    <div class="fondu"></div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/bd.jpg" alt="">
  </div>
  <div id="solo">
    <div class="fondu"></div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
  </div>
  <div id="solo">
    <div class="fondu"></div>
    <img src="<?php echo get_stylesheet_directory_uri();?>/images/bd.jpg" alt="">
  </div>
</div>
<!-- FIN DES RONDS -->

<div id="page-home" role="main">
	<div class="content">



    <!-- TOP DIX -->
    <div id="topdix">
      <h3>Top 10</h3>
      <div class="row">
        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>

        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>

        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>

        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>

        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>

        <div class="small-2 columns" id="cover">
          <h4>The new avenger #5</h4>
          <img src="<?php echo get_stylesheet_directory_uri();?>/images/cover.jpg" alt="">
          <div class="row" id="ajouter">
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto1.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto2.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto3.png" alt=""></div>
            <div class="small-3 columns"><img src="<?php echo get_stylesheet_directory_uri();?>/images/picto4.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>


    <div id="principal">
      <div class="row">

        <!--- ACTUALITES -->
        <div class="small-9 columns" id="actu">
          <h3>Dernières actualités</h3>
          <?php if ( have_posts() ) : ?>

        		<?php /* Start the Loop */ ?>
        		<?php while ( have_posts() ) : the_post(); ?>
        			<?php get_template_part( 'content', 'news', get_post_format() ); ?>
        		<?php endwhile; ?>

        		<?php else : ?>
        			<?php get_template_part( 'content', 'none' ); ?>

        		<?php endif; // End have_posts() check. ?>
        </div>
        <!-- FIN -->


        <!--- TOP MEMBRES -->
        <div class="small-3 columns" id="topmembres">
          <h3>Top membres</h3>
          <div class="row">
            <div class="small-6 columns"><img src="http://localhost:8888/topten/wp-content/uploads/2016/02/wolverine-hugh-jackman-150x150.jpg"></div>
            <div class="small-6 columns"><img src="http://localhost:8888/topten/wp-content/uploads/2016/02/wolverine-hugh-jackman-150x150.jpg"></div>
            <div class="small-6 columns"><img src="http://localhost:8888/topten/wp-content/uploads/2016/02/wolverine-hugh-jackman-150x150.jpg"></div>
            <div class="small-6 columns"><img src="http://localhost:8888/topten/wp-content/uploads/2016/02/wolverine-hugh-jackman-150x150.jpg"></div>
          </div>
          <div id="voirplus">
            <a href="">Voir plus →</a>
          </div>
        </div>
        <!-- FIN -->


      </div>
    </div>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</div>

</div>

<?php get_footer(); ?>
