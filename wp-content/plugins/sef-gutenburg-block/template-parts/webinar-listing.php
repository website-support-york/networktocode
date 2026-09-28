<?php
/**
* Layout of sef Webinars.
* Redesigned to match new Figma layout:
*   Section 1 - Upcoming Webinars (2-column cards)
*   Section 2 - On-Demand Webinars (filterable card grid)
* All original WP_Query args, ACF field lookups, and button routing logic
* are unchanged - only markup / classes / styling were reworked.
**/
// Create id attribute allowing for custom "anchor" value.
$id = 'iframe_' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<section id="<?php echo esc_attr( $id ); ?>" class="blog-media webinars-redesign<?php echo esc_attr( $className ); ?>" data-insights-block data-insights-block-id="<?php echo esc_attr( sanitize_title( $id ) ); ?>" data-insights-per-page="12">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">

                <!-- ============================================================
                     SECTION 1 - UPCOMING WEBINARS (2-column)
                ============================================================= -->
                <div class="upcoming-webinars">
                    <?php
                        $args = array(
                            'post_type'      => 'post',
                            'category_name'  => 'webinars',
                            'post_status'    => array('future', 'publish'),
                            'posts_per_page' => -1,
                            'orderby'        => 'date',
                            'order'          => 'ASC',
                            'date_query'     => array(
                                array(
                                    'after'     => date('Y-m-d'),
                                    'inclusive' => true,
                                ),
                            ),
                        );
                        $loop = new WP_Query( $args );
                        $upcoming_count = $loop->post_count;
                    ?>
                    <div class="upcoming-grid<?php echo ' upcoming-grid--count-' . $upcoming_count; ?>">
                        <?php if ( $loop->have_posts() ) : ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <?php $post_button_detail = get_field( 'post_button_detail', get_the_ID() ); ?>

                                <div class="upcoming-card">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <figure class="upcoming-card__thumb">
                                            <?php the_post_thumbnail( 'large' ); ?>
                                        </figure>
                                    <?php endif; ?>

                                    <div class="upcoming-card__body">
                                        <span class="upcoming-card__label">Upcoming Webinar</span>
                                        <h3 class="upcoming-card__title"><?php the_title(); ?></h3>

                                        <div class="upcoming-card__desc">
                                            <?php
                                            $content = get_the_content();
                                            $content = wp_trim_words( $content, 35, '' );

                                            $exrpt = get_the_excerpt();
                                            $exrpt = wp_trim_words( $exrpt, 35, '' );
                                            ?>
                                            <?php if ( ! empty( $content ) ) : ?>
                                                <?php echo apply_filters( 'the_content', $content ); ?>
                                            <?php else : ?>
                                                <p><?php echo $exrpt; ?></p>
                                            <?php endif; ?>
                                        </div>

                                        <div class="upcoming-card__meta">
                                            <span class="upcoming-card__date">
                                                <i class="bi bi-calendar3"></i> <?php
                                                echo get_the_date( 'F j, Y', get_the_ID() );
                                                echo '&nbsp;&nbsp;&middot;&nbsp;&nbsp;' . get_the_time( 'g:i A', get_the_ID() ). ' EST';

                                                ?>
                                            </span>

                                            <?php
                                            if ( $post_button_detail && ! empty( $post_button_detail['url'] ) ) {
                                                $url    = $post_button_detail['url'];
                                                $title  =  'Register';
                                                $target = ( $url !== '#' ) ? ' target="_blank" rel="noopener nofollow"' : '';
                                                ?>
                                                <a href="<?php echo esc_url( $url ); ?>"<?php echo $target; ?> class="upcoming-card__cta">
                                                    <?php echo esc_html( $title ); ?> <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <?php
                                            } else {
                                                $fallback_url = get_permalink();
                                                ?>
                                                <a href="<?php echo esc_url( $fallback_url ); ?>" target="_blank" class="upcoming-card__cta">
                                                    Register <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; wp_reset_postdata(); ?>
                        <?php else : ?>
                            <?php
                            $no_upcoming_image   = get_field( 'no_upcoming_image' );
                            $no_upcoming_title   = get_field( 'no_upcoming_title' );
                            $no_upcoming_content = get_field( 'no_upcoming_content' );
                            $no_upcoming_button  = get_field( 'no_upcoming_button' );

                            $no_upcoming_image_url = '';
                            if ( is_array( $no_upcoming_image ) && ! empty( $no_upcoming_image['url'] ) ) {
                                $no_upcoming_image_url = $no_upcoming_image['url'];
                            } elseif ( is_numeric( $no_upcoming_image ) ) {
                                $no_upcoming_image_url = wp_get_attachment_image_url( $no_upcoming_image, 'large' );
                            } elseif ( is_string( $no_upcoming_image ) ) {
                                $no_upcoming_image_url = $no_upcoming_image;
                            }

                            $no_upcoming_button_url   = is_array( $no_upcoming_button ) && ! empty( $no_upcoming_button['url'] ) ? $no_upcoming_button['url'] : '';
                            $no_upcoming_button_title = is_array( $no_upcoming_button ) && ! empty( $no_upcoming_button['title'] ) ? $no_upcoming_button['title'] : '';
                            $no_upcoming_button_target = is_array( $no_upcoming_button ) && ! empty( $no_upcoming_button['target'] ) ? $no_upcoming_button['target'] : '_self';
                            $no_upcoming_modal_id     = sanitize_title( $id ) . '-notification-modal';
                            ?>
                            <div class="upcoming-card upcoming-card--empty upcoming-card--no-upcoming">
                                <?php if ( $no_upcoming_image_url ) : ?>
                                    <figure class="upcoming-card__thumb">
                                        <img src="<?php echo esc_url( $no_upcoming_image_url ); ?>" alt="<?php echo esc_attr( $no_upcoming_title ); ?>">
                                    </figure>
                                <?php endif; ?>

                                <div class="upcoming-card__body">
                                    <?php if ( $no_upcoming_title ) : ?>
                                        <span class="upcoming-card__label">Upcoming Webinars</span>
                                        <h3 class="upcoming-card__title"><?php echo esc_html( $no_upcoming_title ); ?></h3>
                                    <?php endif; ?>

                                    <?php if ( $no_upcoming_content ) : ?>
                                        <div class="upcoming-card__desc">
                                            <?php echo apply_filters( 'the_content', $no_upcoming_content ); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ( $no_upcoming_button_url ) : ?>
                                        <div class="upcoming-card__meta">
                                            <a href="#<?php echo esc_attr( $no_upcoming_modal_id ); ?>" class="upcoming-card__cta" data-webinar-modal-trigger="<?php echo esc_attr( $no_upcoming_modal_id ); ?>" aria-controls="<?php echo esc_attr( $no_upcoming_modal_id ); ?>" aria-haspopup="dialog">
                                                <?php echo esc_html( $no_upcoming_button_title ?: 'Learn More' ); ?> <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ( $no_upcoming_button_url ) : ?>
                                <div id="<?php echo esc_attr( $no_upcoming_modal_id ); ?>" class="webinar-form-modal" data-webinar-modal hidden role="dialog" aria-modal="true" aria-labelledby="<?php echo esc_attr( $no_upcoming_modal_id ); ?>-title">
                                    <div class="webinar-form-modal__backdrop" data-webinar-modal-close></div>
                                    <div class="webinar-form-modal__dialog newsletter__webinar_detail" role="document">
                                        <button type="button" class="webinar-form-modal__close" data-webinar-modal-close aria-label="Close notification form">&times;</button>
                                        <h2 id="<?php echo esc_attr( $no_upcoming_modal_id ); ?>-title" class="webinar-form-modal__title">Sign up to be notified</h2>
                                        <div id="<?php echo esc_attr( $no_upcoming_modal_id ); ?>-form" class="webinar-form-modal__form"></div>
                                    </div>
                                </div>
                               
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- if $upcoming_count is 1 then show title here "on demand webinars" -->
                <?php if ( $upcoming_count === 1 ) : ?>
                    <h2 class="ondemand-title">On-Demand Webinars</h2>
                <?php endif; ?>
                <!-- ============================================================
                     FILTER BAR (filters the On-Demand grid below)
                ============================================================= -->
                <?php
                // Build filter option lists from the on-demand query results.
                $args2 = array(
                    'post_type'      => 'post',
                    'category_name'  => 'webinars',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'date_query'     => array(
                        array(
                            'before'    => current_time( 'Y-m-d' ),
                            'inclusive' => false,
                        ),
                    ),
                );
                $loop2 = new WP_Query( $args2 );

                $ondemand_categories = array();
                $ondemand_years      = array();
                $ondemand_hosts      = array();
                $ondemand_category_ids = array();
                $ondemand_hosts_ids = array();
                $webinar_category   = get_category_by_slug( 'webinars' );
                $webinar_subcategory_ids = array();

                if ( $webinar_category ) {
                    $webinar_subcategory_ids = get_term_children( $webinar_category->term_id, 'category' );
                    if ( is_wp_error( $webinar_subcategory_ids ) ) {
                        $webinar_subcategory_ids = array();
                    }
                    $webinar_subcategory_ids = array_map( 'intval', $webinar_subcategory_ids );

                    $webinar_subcategories = get_terms(
                        array(
                            'taxonomy'   => 'category',
                            'child_of'   => $webinar_category->term_id,
                            'hide_empty' => true,
                            'orderby'    => 'name',
                            'order'      => 'ASC',
                        )
                    );

                    if ( ! is_wp_error( $webinar_subcategories ) ) {
                        foreach ( $webinar_subcategories as $webinar_subcategory ) {
                            $ondemand_categories[ $webinar_subcategory->slug ] = $webinar_subcategory->name;
                            $ondemand_category_ids[ $webinar_subcategory->slug ] = (int) $webinar_subcategory->term_id;
                        }
                    }
                }

                if ( $loop2->have_posts() ) {
                    foreach ( $loop2->posts as $od_post ) {
                        $od_year                     = get_the_date( 'Y', $od_post->ID );
                        $ondemand_years[ $od_year ]  = $od_year;

                        // Get hosts from the hosts taxonomy
                        $post_hosts = get_the_terms( $od_post->ID, 'hosts' );
                        if ( ! empty( $post_hosts ) && ! is_wp_error( $post_hosts ) ) {
                            foreach ( $post_hosts as $host ) {
                                $host_slug = $host->slug;
                                $ondemand_hosts[ $host_slug ] = $host->name;
                                $ondemand_hosts_ids[ $host_slug ] = (int) $host->term_id;
                            }
                        }
                    }
                    ksort( $ondemand_years );
                    $ondemand_years = array_reverse( $ondemand_years, true );
                    ksort( $ondemand_hosts );
                }

                $insights_page      = max( 1, absint( $_GET['webinar_page'] ?? 1 ) );
                $insights_search    = isset( $_GET['search'] ) ? sanitize_text_field( wp_unslash( $_GET['search'] ) ) : '';
                $insights_category  = isset( $_GET['category'] ) ? absint( $_GET['category'] ) : 0;
                $insights_author    = isset( $_GET['host'] ) ? absint( $_GET['host'] ) : 0;
                $insights_year      = isset( $_GET['date'] ) ? absint( $_GET['date'] ) : 0;

                if ( $insights_category && ! in_array( $insights_category, $webinar_subcategory_ids, true ) ) {
                    $insights_category = 0;
                }

                $ondemand_args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'webinars',
                    'post_status'    => 'publish',
                    'posts_per_page' => 12,
                    'paged'          => $insights_page,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'date_query'     => array(
                        array(
                            'before'    => current_time( 'Y-m-d' ),
                            'inclusive' => false,
                        ),
                    ),
                );

                if ( $insights_search ) {
                    $ondemand_args['s'] = $insights_search;
                }

                if ( $insights_category ) {
                    $ondemand_args['category_name'] = '';
                    $ondemand_args['tax_query'] = array(
                        array(
                            'taxonomy'         => 'category',
                            'field'            => 'term_id',
                            'terms'            => $insights_category,
                            'include_children' => true,
                        ),
                    );
                }

                if ( $insights_author ) {
                    if ( ! isset( $ondemand_args['tax_query'] ) ) {
                        $ondemand_args['tax_query'] = array();
                    }

                    $ondemand_args['tax_query'][] = array(
                        'taxonomy' => 'hosts',
                        'field'    => 'term_id',
                        'terms'    => $insights_author,
                    );
                }

                if ( $insights_year ) {
                    $ondemand_args['date_query'] = array(
                        array(
                            'after'     => $insights_year . '-01-01',
                            'before'    => $insights_year . '-12-31',
                            'inclusive' => true,
                        ),
                    );
                }

                $ondemand_loop = new WP_Query( $ondemand_args );
                ?>
                <form class="webinar-filters" method="get" action="<?php echo esc_url( get_permalink() ); ?>">

                <div class="webinar-filters__search">
                        <i class="bi bi-search"></i>
                        <input type="search" name="search" value="<?php echo esc_attr( $insights_search ); ?>" data-insights-search placeholder="Search...">
                    </div>
                    <div class="webinar-filters__select">
                        <select name="category" data-insights-category>
                            <option value="">Filter by Category</option>
                            <?php foreach ( $ondemand_categories as $slug => $name ) : ?>
                                <?php $category_id = $ondemand_category_ids[ $slug ] ?? 0; ?>
                                <option value="<?php echo esc_attr( $category_id ); ?>" data-term-slug="<?php echo esc_attr( $slug ); ?>" <?php selected( $insights_category, $category_id ); ?>><?php echo esc_html( $name ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="webinar-filters__select">
                        <select name="date" data-insights-date>
                            <option value="">Filter by Post Date</option>
                            <?php foreach ( $ondemand_years as $year ) : ?>
                                <option value="<?php echo esc_attr( $year ); ?>" <?php selected( $insights_year, (int) $year ); ?>><?php echo esc_html( $year ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="webinar-filters__select">
                        <select name="host" data-insights-author>
                            <option value="">Filter by Host</option>
                            <?php foreach ( $ondemand_hosts as $slug => $name ) : ?>
                                <?php $host_id = $ondemand_hosts_ids[ $slug ] ?? 0; ?>
                                <option value="<?php echo esc_attr( $host_id ); ?>" data-host-slug="<?php echo esc_attr( $slug ); ?>" <?php selected( $insights_author, $host_id ); ?>><?php echo esc_html( $name ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
                <div class="cta-spinner" style="display:none;"></div>
                <!-- ============================================================
                     SECTION 2 - ON-DEMAND WEBINARS (filterable grid)
                ============================================================= -->
                <div class="ondemand-webinars" id="ondemand-webinars">
                    <div class="ondemand-grid" data-insights-grid>
                        <?php
                        if ( $ondemand_loop->have_posts() ) :
                            while ( $ondemand_loop->have_posts() ) : $ondemand_loop->the_post();

                                $post_button_detail_demand = get_field( 'post_button_detail', get_the_ID() );

                                // data attributes for client-side filtering
                                $card_cats = array();
                                foreach ( get_the_category() as $c ) {
                                    if ( 'webinars' !== $c->slug ) {
                                        $card_cats[] = $c->slug;
                                    }
                                }
                                $card_year   = get_the_date( 'Y' );
                                $card_author = sanitize_title( get_the_author() );

                                $card_url                 = ( is_array( $post_button_detail_demand ) && ! empty( $post_button_detail_demand['url'] ) ) ? trim( $post_button_detail_demand['url'] ) : '';
                                $card_template_slug       = get_page_template_slug( get_the_ID() );
                                $card_template_name       = '';
                                $card_template_identifier = strtolower( str_replace( array( '-', '_' ), ' ', trim( $card_template_slug ) ) );

                                if ( $card_template_slug ) {
                                    $card_templates     = wp_get_theme()->get_page_templates();
                                    $card_template_name = isset( $card_templates[ $card_template_slug ] ) ? $card_templates[ $card_template_slug ] : basename( $card_template_slug );
                                } else {
                                    $card_template_name = 'Default';
                                }

                                $card_is_elementor_full_width = in_array( $card_template_identifier, array( 'elementor full width', 'elementor header footer' ), true ) || strtolower( trim( $card_template_name ) ) === 'elementor full width';

                                if ( empty( $card_url ) && $card_is_elementor_full_width ) {
                                    $card_slug = basename( trim( (string) wp_parse_url( $card_url, PHP_URL_PATH ), '/' ) );
                                    $card_slug = $card_slug ? $card_slug : get_post_field( 'post_name', get_the_ID() );
                                    $card_url  = home_url( '/resources/webinars/' . ( 'watch' === $card_slug ? get_post_field( 'post_name', get_the_ID() ) : $card_slug ) . '/' );
                                }

                                ?>
                                <div class="ondemand-card"
                                     data-post-id="<?php echo get_the_ID(); ?>"
                                     data-title="<?php echo esc_attr( strtolower( get_the_title() ) ); ?>"
                                     data-cats="<?php echo esc_attr( implode( ' ', $card_cats ) ); ?>"
                                     data-year="<?php echo esc_attr( $card_year ); ?>"
                                     data-author="<?php echo esc_attr( $card_author ); ?>">
                                    <a href="<?php echo esc_url( $card_url ?: '#' ); ?>"<?php echo $card_url ? ' target="_blank" rel="nofollow noopener"' : ''; ?>>

                                        
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <figure class="ondemand-card__thumb">
                                                <?php the_post_thumbnail( 'medium_large' ); ?>
                                            </figure>
                                        <?php else : ?>
                                            <figure class="ondemand-card__thumb ondemand-card__thumb--placeholder" aria-label="No webinar image available">
                                                <span>Webinar</span>
                                            </figure>
                                        <?php endif; ?>

                                        <div class="ondemand-card__body">
                                            <span class="ondemand-card__date"><?php echo get_the_date( 'F j, Y', get_the_ID() ); ?></span>
                                            <h4 class="ondemand-card__title ddd"><?php echo esc_html( html_entity_decode( get_the_title(), ENT_QUOTES, 'UTF-8' ) ); ?></h4>

                                            <div class="ondemand-card__desc">
                                                <?php
                                                $content = get_the_content();
                                                $content = wp_trim_words( $content, 35, '' );

                                                $exrpt = get_the_excerpt();
                                                $exrpt = wp_trim_words( $exrpt, 35, '' );
                                                ?>
                                                <?php if ( ! empty( $content ) ) : ?>
                                                    <?php echo apply_filters( 'the_content', $content ); ?>
                                                <?php else : ?>
                                                    <p><?php echo $exrpt; ?></p>
                                                <?php endif; ?>
                                            </div>

                                            <?php
                                            // --- unchanged button / template routing logic ---
                                            global $post;

                                            $template_slug = get_page_template_slug( $post->ID );
                                            $template_name = '';

                                            if ( $template_slug ) {
                                                $templates = wp_get_theme()->get_page_templates();
                                                if ( isset( $templates[ $template_slug ] ) ) {
                                                    $template_name = $templates[ $template_slug ];
                                                } else {
                                                    $template_name = basename( $template_slug );
                                                }
                                            } else {
                                                $template_name = 'Default';
                                            }


                                            // Extract variables as done previously
                                            $url                   = ( is_array( $post_button_detail_demand ) && ! empty( $post_button_detail_demand['url'] ) ) ? trim( $post_button_detail_demand['url'] ) : '';
                                            $title                 = ( is_array( $post_button_detail_demand ) && ! empty( $post_button_detail_demand['title'] ) ) ? trim( $post_button_detail_demand['title'] ) : 'Watch On-Demand';
                                            $parsed                = parse_url( $url );
                                            $slug                  = isset( $parsed['path'] ) ? basename( trim( $parsed['path'], '/' ) ) : '';
                                            $template_identifier = strtolower( str_replace( array( '-', '_' ), ' ', trim( $template_slug ) ) );
                                            $is_elementor_full_width = in_array( $template_identifier, array( 'elementor full width', 'elementor header footer' ), true ) || strtolower( trim( $template_name ) ) === 'elementor full width';
                                            $url_host              = strtolower( (string) wp_parse_url( $url, PHP_URL_HOST ) );
                                            $is_video_url           = (bool) preg_match( '/(^|\.)youtube\.com$|(^|\.)youtu\.be$|(^|\.)go\.networktocode\.com$/i', $url_host );

                                            // 1. A configured URL takes precedence over template routing.
                                            if ( ! empty( $url ) ) {
                                                // if ( $is_video_url ) {
                                                    ?>
                                                    <a href="<?php echo esc_url( $url ); ?>" class="ondemand-card__cta" rel="nofollow noopener" target="_blank">
                                                        Watch Now <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                    <?php
                                                // }

                                            }
                                            // 2. Only use Elementor routing when no button URL is configured.
                                            elseif ( $is_elementor_full_width ) {
                                                $newslug = get_post_field( 'post_name', get_the_ID() );
                                                $slug    = $slug ? $slug : $newslug;

                                                if ( $slug == 'watch' ) {
                                                    $slug = $newslug;
                                                }

                                                $new_url = home_url( '/resources/webinars/' . $slug . '/' );
                                                $targets = "_blank";
                                                $host    = $_SERVER['HTTP_HOST'];
                                                ?>
                                                <a data-url="<?php echo esc_attr( $host ); ?>" href="<?php echo esc_url( $new_url ); ?>" class="ondemand-card__cta" rel="nofollow noopener" target="<?php echo esc_attr( $targets ); ?>">
                                                    Watch Now <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <?php
                                            }
                                            // 3. If neither URL nor Elementor routing is available, show Video Coming Soon.
                                            else {
                                                ?>
                                                <a href="#" class="ondemand-card__cta ondemand-card__cta--disabled" rel="nofollow noopener">
                                                    Video Coming Soon <i class="bi bi-arrow-right"></i>
                                                </a>
                                                <?php
                                            }

                                            ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                    <?php if ( ! $ondemand_loop->post_count ) : ?>
                        <p class="ondemand-empty" data-insights-empty>No webinars match your filters.</p>
                    <?php endif; ?>

                    <?php
                    $pagination_args = array_filter(
                        array(
                            'search'   => $insights_search,
                            'category' => $insights_category,
                            'host'     => $insights_author,
                            'date'     => $insights_year,
                        )
                    );
                    $pagination_links = paginate_links(
                        array(
                            'base'      => esc_url( add_query_arg( 'webinar_page', '%#%', get_permalink() ) ),
                            'format'    => '',
                            'current'   => $insights_page,
                            'total'     => max( 1, (int) $ondemand_loop->max_num_pages ),
                            'mid_size'  => 2,
                            'end_size'  => 1,
                            'prev_next' => false,
                            'type'      => 'array',
                            'add_args'  => $pagination_args,
                        )
                    );
                    ?>
                    <?php if ( $pagination_links ) : ?>
                        <nav class="pagination site-paginate insights-pagination" data-insights-pagination aria-label="Insights pagination">
                            <?php foreach ( $pagination_links as $pagination_link ) : ?>
                                <?php echo str_replace( 'class="page-numbers', 'class="insights-pagination__item page-numbers', $pagination_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                            <?php endforeach; ?>
                            <?php if ( $insights_page < $ondemand_loop->max_num_pages ) : ?>
                                <a class="next page-numbers insights-pagination__next" href="<?php echo esc_url( add_query_arg( array_merge( $pagination_args, array( 'webinar_page' => $insights_page + 1 ) ), get_permalink() ) ); ?>">Next &gt;&gt;</a>
                            <?php endif; ?>
                        </nav>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    (function () {
        var modal = document.getElementById('<?php echo esc_js( $no_upcoming_modal_id ); ?>');
        var formTarget = document.getElementById('<?php echo esc_js( $no_upcoming_modal_id ); ?>-form');
        var formLoaded = false;

        if (!modal || !formTarget) {
            return;
        }

        function openModal(event) {
            event.preventDefault();
            modal.hidden = false;
            document.body.classList.add('webinar-form-modal-open');
            console.log('Modal opened:', modal);

            if (formLoaded) {
                return;
            }

            var createForm = function () {
                if (window.hbspt && window.hbspt.forms) {
                    window.hbspt.forms.create({
                        region: 'na1',
                        portalId: '22575505',
                        formId: '5cf67b25-76ae-422e-b3e7-046d2466decd',
                        target: '#' + formTarget.id,
                        onFormReady: function () {
                            jQuery(".webinar-form-modal .hs-input").attr("placeholder", "Email Address");
                        }
                    });
                    formLoaded = true;
                }
            };

            if (window.hbspt && window.hbspt.forms) {
                createForm();
            } else {
                var script = document.createElement('script');
                script.src = 'https://js.hsforms.net/forms/embed/v2.js';
                script.charset = 'utf-8';
                script.onload = createForm;
                document.head.appendChild(script);
            }

                
        }

        function closeModal() {
            modal.hidden = true;
            document.body.classList.remove('webinar-form-modal-open');
        }

        var trigger = document.querySelector('[data-webinar-modal-trigger="<?php echo esc_js( $no_upcoming_modal_id ); ?>"]');
        if (trigger) {
            trigger.addEventListener('click', openModal);
        }
        modal.querySelectorAll('[data-webinar-modal-close]').forEach(function (element) {
            element.addEventListener('click', closeModal);
        });
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !modal.hidden) {
                closeModal();
            }
        });
    }());
</script>
<script>
// window.addEventListener('load', function () {
//     jQuery(".webinar-form-modal__dialog .hs-input")
//         .attr("placeholder", "Email Address");
// });
</script>