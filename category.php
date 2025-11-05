<?php
/**
 * Category template - HTML CMS theme
 * File: wp-content/themes/html_cms/category.php
 */

get_header();
?>



<!-- Navigation -->


<?php
// Show category title & description
$cat_title = single_cat_title( '', false );
$cat_description = category_description();
?>

<!-- Banner (kept simple) -->
<div class="banner">
  <div class="banner-container">
    <div class="sidebar">
      <?php
      // show category list
      echo '<ul>';
      $categories = get_categories( array( 'hide_empty' => 0 ) );
      foreach ( $categories as $cat ) {
        printf(
          '<li><a href="%1$s">%2$s</a></li>',
          esc_url( get_category_link( $cat->term_id ) ),
          esc_html( $cat->name )
        );
      }
      echo '</ul>';
      ?>
    </div>
    <div class="banner-image">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/banner-default.jpg' ); ?>" alt="Banner">
    </div>
  </div>
</div>

<!-- Category Section -->
<div class="container">
  <h2 class="section-title">Danh mục: <?php echo esc_html( $cat_title ); ?></h2>
  <?php if ( $cat_description ) : ?>
    <div class="category-description"><?php echo wp_kses_post( wpautop( $cat_description ) ); ?></div>
  <?php endif; ?>

  <!-- Loop: posts in this category -->
  <?php if ( have_posts() ) : ?>
    <div class="product-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="product-card">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'product-image' ) ); ?></a>
          <?php else : ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/placeholder-200.png' ); ?>" class="product-image" alt="<?php the_title_attribute(); ?>"></a>
          <?php endif; ?>

          <div class="product-info">
            <h3 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <?php
            // If you store price as custom field 'price', show it
            $price = get_post_meta( get_the_ID(), 'price', true );
            if ( $price ) {
              echo '<div class="product-price">' . esc_html( $price ) . '</div>';
            } else {
              echo '<div class="product-price">Liên hệ để biết giá</div>';
            }
            ?>

            <div class="excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
      <?php
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __('« Trước', 'html_cms'),
        'next_text' => __('Sau »', 'html_cms'),
      ) );
      ?>
    </div>

  <?php else : ?>
    <p>Không có sản phẩm nào trong danh mục này.</p>
  <?php endif; ?>

</div>

<!-- Blog section fallback (static-like, optional) -->


<?php get_footer(); ?>
