	</div>
	<footer id="footer">
		<div class="band-brands">
			<div class="container">
				<h2 class="tac marb_d mart_d">Affiliated Brands</h2>
			<?php
				$brands = array("TIGI.png", "skinbase.png", "shellac.png", "moroccan.png", "majirel.png", "iona.png", "goldwell.png", "Dermalogica.png", "cnd.png", "cnd-vinylux.png", "caci.png", "babtec.png");

				foreach($brands as $brand) : ?>
					<div class="col-md-3 col-sm-3 col-xs-6 tac">
						<img src="/images/brands/<?php echo $brand; ?>" />
					</div>
				<?php endforeach; ?>
			</div>

			<div style="clear:both"></div>
		</div>

		<div class="tac footer__social-links">
			<a href="https://www.facebook.com/arabellabeautymanagement/" target="_blank"><span class="fa fa-facebook"></span></a>
		</div>
	</footer>
	
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>

	<script type="text/javascript" src="/js/site.js"></script>
</body>