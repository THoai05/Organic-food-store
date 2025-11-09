<?php

// =======================
// Load CSS cho theme (ĐÃ SỬA)
// =======================
function doAnCMS_enqueue_styles() {
    
    // 1. Tải file CSS NỀN (style.css)
    // File này sẽ được tải trên MỌI TRANG
    // Nó nên chứa các style chung như header, footer, body...
    wp_enqueue_style(
        'doAnCMS-base-style',       // Đặt tên
        get_stylesheet_uri(),       // Hàm này tự động tìm "style.css"
        array(),                    // Không phụ thuộc file nào
        '1.0.1'                     // Đổi số version để xóa cache
    );

    // 2. Tải file CSS cho TRANG DANH MỤC
    // Nó CHỈ tải khi bro ở trang danh mục sản phẩm
    if ( is_tax('product_cat') ) {
        wp_enqueue_style(
            'doAnCMS-category-style',   // Đặt tên riêng
            get_template_directory_uri() . '/category.css', // Đường dẫn tới file
            array('doAnCMS-base-style'), // Báo nó phụ thuộc file base
            '1.0.1'                      // Version
        );
    }

    // 3. (Tùy chọn) Tải file CSS riêng cho TRANG CHỦ
    // Nó CHỈ tải khi bro ở trang chủ
    // if ( is_front_page() ) {
    //     wp_enqueue_style(
    //         'doAnCMS-front-page-style',
    //         get_template_directory_uri() . '/front-page.css', // Ví dụ tên file là front-page.css
    //         array('doAnCMS-base-style'),
    //         '1.0.1'
    //     );
    // }

}
add_action('wp_enqueue_scripts', 'doAnCMS_enqueue_styles');


// =======================
// Khai báo các hỗ trợ của theme (Giữ nguyên)
// =======================
function doAnCMS_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    // **Thêm WooCommerce support**
    add_theme_support('woocommerce');

    register_nav_menus(array(
        'primary' => __('Main Menu', 'doAnCMS'),
    ));
}
add_action('after_setup_theme', 'doAnCMS_setup');


?>