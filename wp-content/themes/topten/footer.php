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
        <div id="social">
          <ul>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social1.png"></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social2.png"></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social3.png"></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social4.png"></li>
          </ul>
        </div><!--
        --><div id="newsletter">
        <div class="row">
          <div class="small-4 columns">
            <div style="padding-top:4px;">
              Tenez-vous informés :
            </div>
          </div>
          <div class="small-6 columns"><input placeholder="votre@mail.com" type="text" class="input-news"></div>
          <div class="small-2 columns"><input type="submit" class="button-news"></div>
        </div>
      </div>
      </div>
    </div>




    <div class="situation">
      <div id="contenu">
        <div class="row">
          <div class="small-4 columns">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.5570308523465!2d7.745140515432419!3d48.58003237926118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c852bafd5c31%3A0x91f19df40bd95151!2s14+Rue+de+la+Division+Leclerc%2C+67000+Strasbourg!5e0!3m2!1sfr!2sfr!4v1455113459776" width="100%" height="268" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="small-4 columns" style="text-align:center;">
            <div class="titre">Nous situer</div>
            <img src="http://placehold.it/100x100">
            <p>
              14 Rue de la Division Leclerc <br>
              67000 Strasbourg <br>
              toptencomics.fr <br>
              <span id="tel">09 51 42 75 87</span>
            </p>
          </div>
          <div class="small-4 columns">
            <div style="height:265px;overflow:hidden;">
              <div class="titre">Nous contacter</div>
                <?php echo do_shortcode('[contact-form-7 id="42" title="Formulaire de contact"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="mentions">
      <div class="contenu">
        <div style="display:inline-block;width:50%;">
          Copyright © 2016 — TOPTENCOMICS, All Rights Reserved. Made with <span style="color:red">♥</span> by Alpha Web Agency<!--Aurélien RUCH / Marina GURRIERI / Cécilia MEROUCHE / Alexandre KONG-->
        </div><!--
        --><div style="display:inline-block;text-align:right;width:50%;">
          MENTIONS LÉGALES
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
