<?php
/**
 * The loop that displays a single post
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="linha-single-titulo" class="linha">
						<div class="interno">
							<h2 ><?php echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent ).' / <span>'.get_the_title( $post->ID ).'</span>'; ?></h2>
						</div>
					</div>
					<div id="linha-img-single" class="linha">
						<?php the_post_thumbnail('full');?>
					</div><!-- fecha linha3-->
					<div class="limpa"></div>	
					<div class="hr"></div>

					<div id="linha-single-conteudo"class="linha">
						<div class="interno">

						 
							<?php the_content(); ?>
							<div class="limpa"></div>
							
						</div><!--fecha interno-->
						
					</div><!-- .linha-single-conteudo -->

					
				</div><!-- #post-## -->




<?php endwhile; // end of the loop. ?>
