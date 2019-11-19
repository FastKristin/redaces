<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package waves
 */
?>
		</div> <!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer mt-4 py-5" role="contentinfo">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-12 col-md-4 col-xl-3">
          <h4 class="limelight">Locations</h4>
          <p class="white">Scott Block Theatre<br/>
          4816 50 Ave (Little Gaetz)<br/>
          Red Deer, AB
				</p>
        </div>
        <div class="col-12 col-md-4 col-xl-2">
          <h4 class="limelight">Social</h4>
					<p>
	          <a href="https://www.facebook.com/redacesdanceclub" target="_blank" class="white">Facebook</a><br/>
	          <a href="https://instagram.com/redacesdanceclub" target="_blank" class="white">Instagram</a><br/>
	          <a href="https://twitter.com/RedAces_Dance" target="_blank" class="white">Twitter</a><br/>
	          <a href="https://www.youtube.com/channel/UCVGP9KKa5M07vRj7f0q402Q" target="_blank" class="white">YouTube </a><br/>
	          <a href="mailto:redacesdanceclub@gmail.com" class="white">redacesdanceclub@gmail.com</a>
					</p>
        </div>
        <div class="col-12 col-md-4 col-xl-3">
          <h4 class="limelight">Links</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-right','menu_class' => 'menu nav-menu' ) ); ?>
        </div>
      </div>
    </div>
		<div class="footer-bottom site-info copy">
			<div class="container">
				<div class="footer-nav sixteen columns	">
				</div>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
