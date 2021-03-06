<?php get_header(); ?>

<?php include (TEMPLATEPATH . '/intro.php'); ?>

<!-- Begin Container -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content box">
	<?php if ( is_singular() ) { ?>
		<h1 class="title"><?php the_title(); ?></h1>
	<?php } else { ?>
		<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'elemis' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php } ?>
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<!-- End Container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

