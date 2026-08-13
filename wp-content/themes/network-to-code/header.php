<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Network_To_Code
 */
global $post;
$og_description = get_post_meta($post->ID, '_yoast_wpseo_opengraph-description', true);
$og_description = get_the_excerpt($post->ID);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="//js.hsforms.net" crossorigin />
    <link rel="preconnect" href="//gstatic.com" crossorigin />
    <link rel="prefetch" href="/wp-content/uploads/2022/11/hero1.png" />
    <link rel="prefetch" href="/wp-content/themes/network-to-code/assets/images/arrow.svg" />
    <link rel="preload" as="image" href="/wp-content/uploads/2025/05/image-1.webp" fetchpriority="high" type="image/webp">

	  <style>
		  @media(max-width:991px){
			  .wt-cli-cookie-bar-container{display: none !important;}	
		  }
		</style>
    <?php wp_head(); ?>
    
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- ntc header -->
    <header id="site-header" class="navbar navbar-expand-md navbar-dark bg-dark wow slideInLeft">
      <div class="container">
        
        <?php the_custom_logo(); ?>

 <div id="navbarText" class="collapse navbar-collapse">
            <nav class="desk-nav">
              <div class="site-nav list--inline" id="SiteNav">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0" id="menu-new-header-menu">
                  <?php wp_nav_menu( array(
                    'menu' => 'Desktop Header Menu',  
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarText', 
                    'add_li_class'  => 'nav-item dropdown dropdown-mega position-static',
                    'add_a_class' => 'nav-link dropdown-toggle' )); ?>
                </ul>
              </div>
               
                  <?php
                  $array_menu = wp_get_nav_menu_items('Desktop Header Menu');
                  foreach ($array_menu as $navItem ) {
                    ?>
                  <div class="desktop-dropdown-menu" id="saap-<?php echo str_replace(' ', '-',$navItem->title) ?>" data-menu-parent="<?php echo str_replace(' ', '-',$navItem->title) ?>">
                    <div class="dropdown-menu shadow fadeIn ">
                   <div class="mega-content">
                      <div class="row m-0">
                        <?php 
                          $menu_image = get_field('menu_image', $navItem);
                          $menu_content = get_field('menu_content', $navItem);
                          $menu_link = get_field('menu_link', $navItem);
                          $link_popup_show = get_field('link_popup_show', $navItem);



                         ?>
                         <?php if (!empty($menu_image || $menu_content || $menu_link )) { ?>
                          <div class="col-4 col-sm-4 col-md-4 p-4 bg-light gray-triangle">
                            <div class="zindex-1">
                              <div class="image-content pt-2 pb-2">
                                <img src="<?php echo $menu_image; ?>" alt=""/>
                                <?php echo $menu_content; ?>
                                 <?php if (!empty ($menu_link )) { ?>
                                  <a href="<?php echo $menu_link['url']  ?>" class="btn theme-btn"
                                    <?php if( $link_popup_show ): ?>data-cursor="-color-orange" data-bs-toggle="modal" data-bs-target="<?php echo $menu_link['url'] ?>" <?php endif; ?>
                                  >
                                    <?php echo $menu_link['title']  ?>
                                  </a>
                                  <? } ?>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                        
                        
                       <?php if( have_rows('link_list_and_content', $navItem)): 
                        ?>
                        <div class="col-4 col-sm-4 col-md-4 p-4">
                          <?php while( have_rows('link_list_and_content', $navItem)) : the_row(); 

                        $menu_title = get_sub_field('menu_title', $navItem);
                         $link_target = $menu_title['target'] ? $menu_title['target'] : '_self';
                        $short_description = get_sub_field('short_description', $navItem);

                            ?>
                             <?php if (!empty($menu_title || $short_description )) { ?>
                          <div>
                             <?php if (!empty($menu_title )) { $menuURL = $menu_title['url'] == "#" ? "javascript:void(0)" : $menu_title['url']; ?>
                                <h5>
                                  <a href="<?php echo $menuURL; ?>" target="<?php echo esc_attr( $link_target ); ?>"> <?php echo $menu_title['title']; ?> 
                                  <?php echo $menu_title['url'] == "#" ? '' : '<i class="bi bi-chevron-right"></i>'; ?> </a> </a>
                                </h5> 
                            <?php } ?>
                             <?php if (!empty($short_description  )) { ?>
                                <p> <?php echo $short_description; ?>  </p>
                            <?php } ?>

                            <?php if( have_rows('tab_links', $navItem)): ?>

                            <div class="extra-links">
                              <?php while( have_rows('tab_links', $navItem)) : the_row(); 

                                $tab_link = get_sub_field('tab_link', $navItem);
                                $link_target1 = $tab_link['target'] ? $tab_link['target'] : '_self';
                                $sub_menu_description = get_sub_field('sub_menu_description', $navItem);
                              ?>
                              <a href="<?php echo $tab_link['url']; ?>" target="<?php echo esc_attr( $link_target1 ); ?>"><i class="bi bi-chevron-right"></i> <?php echo $tab_link['title']; ?></a>
                              <?php if ($sub_menu_description): ?>
                                <p><?php echo $sub_menu_description; ?></p>
                              <?php endif ?>
                              <?php endwhile; ?>
                            </div>
                            <?php endif; ?>

                          </div>
                          <?php } ?>
                          <?php endwhile; ?>
                        
                        </div>
                        <?php endif; ?>
                        

                        <?php if( have_rows('link_list_and_content2', $navItem)): 
                        ?>
                        <div class="col-4 col-sm-4 col-md-4 p-4">
                          <?php while( have_rows('link_list_and_content2', $navItem)) : the_row(); 

                        $menu_title = get_sub_field('menu_title1', $navItem);
                        $link_target2 = $menu_title['target'] ? $menu_title['target'] : '_self';
                        $short_description = get_sub_field('short_description1', $navItem);

                            ?>
                             <?php if (!empty($menu_title || $short_description )) { ?>
                          <div>
                             <?php if (!empty($menu_title )) { $menuURL = $menu_title['url'] == "#" ? "javascript:void(0)" : $menu_title['url']; ?>
                                <h5>
                                  <a href="<?php echo $menuURL; ?>" target="<?php echo esc_attr( $link_target2 ); ?>"> <?php echo $menu_title['title']; ?> 
                                  <?php echo $menu_title['url'] == "#" ? '' : '<i class="bi bi-chevron-right"></i>'; ?> </a>
                                </h5>
                            <?php } ?>
                             <?php if (!empty($short_description  )) { ?>
                                <p> <?php echo $short_description; ?>  </p>
                            <?php } ?>

                            <?php if( have_rows('tab_links1', $navItem)): ?>

                            <div class="extra-links">
                              <?php while( have_rows('tab_links1', $navItem)) : the_row(); 

                                $tab_link = get_sub_field('tab_link1', $navItem);
                                $link_target3 = $tab_link['target'] ? $tab_link['target'] : '_self';
                              ?>
                              <a href="<?php echo $tab_link['url']; ?>" target="<?php echo esc_attr( $link_target3 ); ?>"><i class="bi bi-chevron-right"></i> <?php echo $tab_link['title']; ?></a>
                              <?php endwhile; ?>
                            </div>
                            <?php endif; ?>

                          </div>
                          <?php } ?>
                          <?php endwhile; ?>
                        
                        </div>
                        <?php endif; ?>



                      </div>
                      </div>
                     </div>
                  </div>
                  
               <?php }?>
                   <div class="nav-item nav-contact">
                      <a class="nav-link" href="https://networktocode.com/contact/" data-cursor="-opaque" >Contact</a>
                    </div>
                
                </nav>
              </div>
        
      </div>

      <!-- mobile menu -->
      <div class="col-2 d-lg-none d-block">
        <a
          aria-label="mobile menu"
          href="javascript:void(0)"
          class="parallax-btn sidemenu_btn"
          id="sidemenu_toggle"
        >
          <div class="animated-wrap sidemenu_btn_inner">
            <div class="animated-element">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </a>
        <!--Side Nav-->
        <div class="side-menu hidden">
          <div class="inner-wrapper">
            <?php the_custom_logo(); ?>
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <?php 
                wp_nav_menu(
                  array(
                    'theme_location'  => 'menu-1',
                    'container'      => 'nav',
                    'container_class' => 'side-nav w-100',
                    'container_id' => '',
                    'menu_id'         => '',              
                    'menu_class'    => 'navbar-nav'
                  )
                );
            ?>
            
              <a class="nav-link contact-cta" href="https://networktocode.com/contact/" data-cursor="-opaque">Contact</a>
            
          </div>
        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->
      </div>




    </header>