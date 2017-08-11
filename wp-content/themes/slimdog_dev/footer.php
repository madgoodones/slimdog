<?php wp_footer() ?>

<footer>
	<div class="inner">

		<div class="block">
		<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
			<?php dynamic_sidebar( 'footer_1' ); ?>
		<?php endif; ?>
		<div class="social">
			<div class="title">SOcial</div>

			<a href="#">
				<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
			</a>

			<a href="#">
				<i class="fa fa-vimeo fa-2x" aria-hidden="true"></i>
			</a>

			<a href="#">
				<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
			</a>
		</div>
		</div>

		<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
			<?php dynamic_sidebar( 'footer_2' ); ?>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
			<?php dynamic_sidebar( 'footer_3' ); ?>
		<?php endif; ?>
	</div>
</footer>

<div class="post-footer">
	<div class="inner">
		<div class="left">
			SLIMDOG ® - ALL RIGHTS RESERVED.
		</div>

		<div class="right">
			by MadGO
		</div>
	</div>
</div>

<!-- analytics -->
<?php $ua = 'YOUR_UA' ?>
<?php $domain = 'YOUR_DOMAIN' ?>

<script>
	(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '<?php echo "$ua"; ?>', '<?php echo "$domain"; ?>');
	ga('send', 'pageview');
</script>

</body>
</html>

