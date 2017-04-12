<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">
	
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<?php
if($i == 0) {
	echo '<div class="split-row">';
}
?>

<div class="half">

			<?php get_template_part( 'content', get_post_format() );?>
</div>

<?php
$i++;
if($i == 2) {
	$i = 0;
	echo '</div>';
}
?>

			<?php endwhile; endif;
			?>

<?php
if($i > 0) {
	echo '</div>';
}
?>

		</div> <!-- /.blog-main -->

      <?php get_sidebar(); ?> 

      </div><!-- /.row -->

 <?php get_footer(); ?>