<?php
/**
 * The template used for displaying page content in highschool.php
 *
 * @package WordPress
 * @subpackage LifePointe
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'lifepointe' ), 'after' => '</div>' ) ); ?>
    <?php edit_post_link( __( 'Edit', 'lifepointe' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->