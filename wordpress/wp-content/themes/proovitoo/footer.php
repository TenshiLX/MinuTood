<footer class="site-footer">

<!-- footer-widgets -->
<div class="footer-widgets clearfix">

	<?php if (is_active_sidebar('footer1')) : ?>
		<div class="footer-widget-area1">
		<?php dynamic_sidebar('footer1'); ?>
		</div>
	<?php endif; ?>

	<?php if (is_active_sidebar('footer2')) : ?>
		<div class="footer-widget-area2">
		<?php dynamic_sidebar('footer2'); ?>
		</div>
	<?php endif; ?>

	<?php if (is_active_sidebar('footer3')) : ?>
		<div class="footer-widget-area3">
		<?php dynamic_sidebar('footer3'); ?>
		</div>
	<?php endif; ?>

	</div><!-- /footer-widgets -->


</footer>

</div><!-- container !-->
<?php wp_footer(); ?>
</body>
</html>