<?php if( is_front_page() ) : ?>
<style>
    footer {
		padding-top: 182px;
    }
</style>
<?php endif; ?>

<footer>
<div  class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="footer-content">
				<div class="footer-logo">
					<?php dynamic_sidebar('footer-content'); ?>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-4 footer-col-divi">
					<?php dynamic_sidebar('footer-Product'); ?>
				</div>
				<div class="col-sm-5 footer-col-divi">
					<?php dynamic_sidebar('footer-Engage'); ?>
				</div>
				<div class="col-sm-3 footer-col-divi">
					<?php dynamic_sidebar('footer-Earn'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>

<script>

	$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        }
    }
	})
	
</script>

<script>
jQuery('.fusion-author-avatar img').attr('alt', 'Author Thumb');

jQuery(document).ready(function ($) {
    $('a').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
         $('html,body').animate({ scrollTop: target.offset().top -50 }, 1000);
         return false;
       }
     }
    });
});
</script>

<?php wp_footer(); ?>
</body>

</html>