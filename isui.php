<?php
/*
Template Name:isui
*/
?>
<?php
/**
 * The template for displaying pages
 *
 * @package Vtrois
 * @version 2.4
 */
$page_side_bar = kratos_option('page_side_bar');
$page_side_bar = (empty($page_side_bar)) ? 'right_side' : $page_side_bar;
get_header();
get_header('banner'); ?>
            <section class="ravenclaw-banner-panel text-center" 
            style="background: url(<?php
            	global $post;  
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id,'kratos-entry-thumb');
    $img_url = $img_url[0];
    if ( has_post_thumbnail() ) {
        echo $img_url; 
    } 
			 ?>) center">
             <h1 class="wow bounceInLeft text-white animated" style="visibility: visible; animation-name: bounceInLeft;">
            <?php
			 $str = the_title('','', false);
			 $arr = explode('-', $str);
			 echo $arr[0];
			 ?>
			 
             </h1> <p class="wow bounceInRight pt-2 text-white animated" style="visibility: visible; animation-name: bounceInRight;">
             	<?php
			 $str = the_title('','', false);
			 $arr = explode('-', $str);
			 echo $arr[1];
			 ?>
             </p> </section>
<div id="" style="background:<?php echo kratos_option('background_index_color'); ?>">
	<div class="container-fuil">
		<div class="row">
			<?php if( $page_side_bar == 'left_side' ){ ?>
				<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
	                <div id="sidebar">
	                    <?php dynamic_sidebar('sidebar_tool'); ?>
	                </div>
	            </aside>
			<?php } ?>
            <section id="main" class='<?php echo ($page_side_bar == 'single') ? 'col-md-12' : 'col-md-12'; ?>'>
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<div class="kratos-hentry clearfix">
						<div class=""><?php the_content(); ?></div>
						<?php if( kratos_option('page_like_donate') || kratos_option('page_share') ) {?>
						<footer class="kratos-entry-footer clearfix">
								<div class="post-like-donate text-center clearfix" id="post-like-donate">
								<?php if ( kratos_option( 'page_like_donate' ) ) : ?>
					   			<a href="<?php echo kratos_option('donate_links'); ?>" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
					   			<?php endif; ?>
								<?php if ( kratos_option( 'page_share' ) ) : ?>
								<a href="javascript:;"  class="Share" ><i class="fa fa-share-alt"></i> 分享</a>
									<?php require_once( get_template_directory() . '/inc/share.php'); ?>
								<?php endif; ?>
					    		</div>
						</footer>
						<?php }?>
					</div>
						<?php if ( kratos_option( 'page_cc' ) ) : ?>
						<div class="kratos-hentry kratos-copyright text-center clearfix">
							<img alt="知识共享许可协议" src="<?php echo get_template_directory_uri(); ?>/images/licenses.png">
							<h5>本作品采用 <a rel="license nofollow" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可</h5>
						</div>
						<?php endif; ?>
						<aside hidden="" id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
                <div id="sidebar">
                    <?php dynamic_sidebar('sidebar_tool'); ?>
                </div>
            </aside>
						<?php comments_template(); ?>
				</article>
			<?php endwhile;?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>