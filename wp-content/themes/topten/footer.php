<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>



		<div id="bottom">
      <div id="fond-footer">
        <div id="super">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/super-typo.png" alt="">
        </div>
        <div id="informations">
          <div class="contenu">
            <ul>
              <li>Accès scan en preview</li>
              <li>Réservation d'issues en ligne</li>
              <li>Gestion de vos collections</li>
              <li>Système d'alerte numéro</li>
            </ul>
            <a href="" class="button">S'inscrire</a>
          </div>
        </div>
      </div>
		</div>



    <div class="bottom-texte">
      <div id="centered">
        <div id="social">dedzdez</div>
      </div>
    </div>




    <div class="situation">
      <div id="contenu">
        <div class="row">
          <div class="small-3 columns">
            <div class="titre">Nous situer</div>
            <img src="http://placehold.it/100x100">
            <p>
              14 Rue de la Division Leclerc <br>
              67000 Strasbourg <br>
              toptencomics.fr <br>
              <span id="tel">09 51 42 75 87</span>
            </p>
          </div>
          <div class="small-4 columns"></div>
          <div class="small-5 columns">
            <div class="titre">Nous contacter</div>
          </div>
        </div>
      </div>
    </div>




		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
