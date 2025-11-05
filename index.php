<?php get_header(); ?>

<div class="banner">
    <div class="banner-container">
      <div class="sidebar">
    <?php
    wp_list_categories([
        'title_li'   => '',
        'taxonomy'   => 'product_cat', // <-- Đây là mấu chốt
        'show_count' => 1,             // Tùy chọn: Hiển thị số lượng sản phẩm
        'hierarchical' => 1            // Tùy chọn: Hiển thị theo cấp bậc cha-con
    ]);
    ?>
</div>
        <div class="banner-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Banner">
        </div>
    </div>
</div>

<div class="container">
    <h2 class="section-title">Sản phẩm nổi bật</h2>
    <div class="product-grid">
        <?php
        $products = new WP_Query([
            'post_type' => 'product',
            'posts_per_page' => 5
        ]);
        if ($products->have_posts()) :
            while ($products->have_posts()) : $products->the_post(); ?>
                <div class="product-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
                    <?php endif; ?>
                    <div class="product-info">
                        <div class="product-name"><?php the_title(); ?></div>
                        <div class="product-price">Giá: <?php echo get_post_meta(get_the_ID(), 'price', true); ?>đ</div>
                    </div>
                </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</div>

<?php get_footer(); ?>
