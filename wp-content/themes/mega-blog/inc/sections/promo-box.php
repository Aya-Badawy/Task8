<?php
/**
 * Promo Box section
 *
 * This is the template for the content of promo_box section
 *
 * @package Theme Palace
 * @subpackage Mega Blog
 * @since Mega Blog 1.0.0
 */
if ( ! function_exists( 'mega_blog_add_promo_box_section' ) ) :
    /**
    * Add promo_box section
    *
    *@since Mega Blog 1.0.0
    */
    function mega_blog_add_promo_box_section() {
        $options = mega_blog_get_theme_options();
        // Check if promo_box is enabled on frontpage
        $promo_box_enable = apply_filters( 'mega_blog_section_status', true, 'promo_box_section_enable' );

        if ( true !== $promo_box_enable ) {
            return false;
        }
        // Get promo_box section details
        $section_details = array();
        $section_details = apply_filters( 'mega_blog_filter_promo_box_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

        // Render promo_box section now.
        mega_blog_render_promo_box_section( $section_details );
    }
endif;
add_action( 'mega_blog_primary_content', 'mega_blog_add_promo_box_section', 15 );

if ( ! function_exists( 'mega_blog_get_promo_box_section_details' ) ) :
    /**
    * promo_box section details.
    *
    * @since Mega Blog 1.0.0
    * @param array $input promo_box section details.
    */
    function mega_blog_get_promo_box_section_details( $input ) {
        $options = mega_blog_get_theme_options();

        $content = array();
            $page_ids = array();

            for ( $i = 1; $i <=  3; $i++ ) {
                if ( ! empty( $options['promo_box_content_page_' . $i] ) )
                    $page_ids[] = $options['promo_box_content_page_' . $i];
            }
            
            $args = array(
                'post_type'         => 'page',
                'post__in'          => ( array ) $page_ids,
                'posts_per_page'    => 3,
                'orderby'           => 'post__in',
                );                    


            // Run The Loop.
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post();
                    $page_post['title']     = get_the_title();
                    $page_post['url']       = get_the_permalink();
                    $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'post-thumbnail' ) : '';

                    // Push to the main array.
                    array_push( $content, $page_post );
                endwhile;
            endif;
            wp_reset_postdata();

            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// promo_box section content details.
add_filter( 'mega_blog_filter_promo_box_section_details', 'mega_blog_get_promo_box_section_details' );


if ( ! function_exists( 'mega_blog_render_promo_box_section' ) ) :
  /**
   * Start promo_box section
   *
   * @return string promo_box content
   * @since Mega Blog 1.0.0
   *
   */
   function mega_blog_render_promo_box_section( $content_details = array() ) {
        $options = mega_blog_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>
            <div id="promo-box-posts" class="page-section relative">
                <div class="wrapper">
                    <div class="section-content col-3">
                        <?php foreach ( $content_details as $content ) :
                            ?>
                            <article class="hentry">
                                <div class="post-wrapper">
                                    <div class="entry-container">
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                        </header>
                                    </div><!-- .entry-container -->

                                    <div class="promo_box-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');"></div><!-- .promo_box-image -->
                                </div><!-- .post-wrapper -->
                            </article>
                        <?php endforeach; ?>
                    </div><!-- .section-content -->
                </div><!-- .wrapper -->
            </div><!-- #promo_box-posts -->
    <?php }
endif;