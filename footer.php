
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-darkblue py-12 pb-8" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto text-center text-white text-sm md:text-[17px] font-poppins font-regular">
		Copyright &copy; <?php echo date_i18n( 'Y' );?>  <span class="font-semibold"><?php echo get_bloginfo( 'name' );?></span>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
