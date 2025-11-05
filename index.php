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
<div class="banner-slider">
    <?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
</div>
    </div>
</div>

<div class="container">
    <h2 class="section-title">Sản phẩm nổi bật</h2>
    <div class="product-grid">
        <?php
$products = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 5,
    'orderby' => 'rand'
]);

if ($products->have_posts()) :
    while ($products->have_posts()) : $products->the_post();
    
        // Cần phải lấy product object để dùng hàm của WC
        // Cách dễ nhất là dùng global $product
        global $product;
        
        // Hoặc dùng cách rõ ràng hơn:
        // $product = wc_get_product( get_the_ID() );

        // Đảm bảo rằng $product là một đối tượng hợp lệ
        if ( ! is_a( $product, 'WC_Product' ) ) {
            continue; // Bỏ qua nếu không phải sản phẩm
        }
?>

        <div class="product-card">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
            <?php endif; ?>
            <div class="product-info">
                <div class="product-name"><?php the_title(); ?></div>

                <div class="product-price">
                    <?php echo $product->get_price_html(); ?>
                </div>

            </div>
        </div>

<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
    </div>
</div>

<div class="container">
    <h2 class="section-title">Sản phẩm hữu cơ</h2> 
    
    <div class="product-grid">
        <?php
        $args_huu_co = [ // Đặt tên biến khác đi để không bị đụng
            'post_type'      => 'product',
            'posts_per_page' => 5,
            
            // 2. LỌC CHÍNH XÁC DANH MỤC "SẢN PHẨM HỮU CƠ"
            'tax_query'      => [
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => 'san-pham-huu-co' // <-- NHỚ KIỂM TRA LẠI SLUG NÀY
                ]
            ]
        ];

        // Dùng biến mới $args_huu_co
        $products_huu_co = new WP_Query($args_huu_co);

        // Dùng vòng lặp với biến mới $products_huu_co
        if ($products_huu_co->have_posts()) :
            while ($products_huu_co->have_posts()) : $products_huu_co->the_post();
            
                global $product;
                
                if ( ! is_a( $product, 'WC_Product' ) ) {
                    continue; 
                }
        ?>

                <div class="product-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
                    <?php endif; ?>
                    <div class="product-info">
                        <div class="product-name"><?php the_title(); ?></div>

                        <div class="product-price">
                            <?php echo $product->get_price_html(); ?>
                        </div>

                    </div>
                </div>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>

<div class="container">
    <h2 class="section-title">Ngũ cốc dinh dưỡng hữu cơ</h2> 
    
    <div class="product-grid">
        <?php
        $args_ngu_coc_huu_co = [ // Đặt tên biến khác đi để không bị đụng
            'post_type'      => 'product',
            'posts_per_page' => 5,
            
            // 2. LỌC CHÍNH XÁC DANH MỤC "SẢN PHẨM HỮU CƠ"
            'tax_query'      => [
                [
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => 'ngu-coc-dinh-duong-huu-co' // <-- NHỚ KIỂM TRA LẠI SLUG NÀY
                ]
            ]
        ];

        // Dùng biến mới $args_huu_co
        $products_ngu_coc_huu_co = new WP_Query($args_ngu_coc_huu_co);

        // Dùng vòng lặp với biến mới $products_huu_co
        if ($products_ngu_coc_huu_co->have_posts()) :
            while ($products_ngu_coc_huu_co->have_posts()) : $products_ngu_coc_huu_co->the_post();
            
                global $product;
                
                if ( ! is_a( $product, 'WC_Product' ) ) {
                    continue; 
                }
        ?>

                <div class="product-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
                    <?php endif; ?>
                    <div class="product-info">
                        <div class="product-name"><?php the_title(); ?></div>

                        <div class="product-price">
                            <?php echo $product->get_price_html(); ?>
                        </div>

                    </div>
                </div>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</div>



<?php get_footer(); ?>
