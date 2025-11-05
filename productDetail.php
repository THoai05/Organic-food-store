<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nui ống Spirulina hữu cơ Sottolestelle 500g - Organic Shop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f5f5f5;
        }

        .header {
            background-color: white;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 40px;
            height: 40px;
        }

        .search-container {
            flex: 1;
            max-width: 600px;
            margin: 0 30px;
            display: flex;
            gap: 10px;
        }

        .search-select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
        }

        .search-input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-btn {
            background-color: #6b9d3e;
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .phone {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .phone-label {
            font-size: 12px;
            color: #999;
        }

        .phone-number {
            font-weight: bold;
            color: #333;
        }

        .cart {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #6b9d3e;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .nav {
            background-color: #6b9d3e;
            padding: 12px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 30px;
        }

        .nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 14px;
        }

        .breadcrumb {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            font-size: 14px;
            color: #666;
        }

        .breadcrumb a {
            color: #6b9d3e;
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
        }

        .product-section {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 30px;
            display: flex;
            gap: 40px;
        }

        .product-gallery {
            flex: 0 0 400px;
        }

        .main-image {
            width: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .main-image img {
            width: 100%;
            height: auto;
        }

        .thumbnail-strip {
            text-align: center;
            color: #999;
            font-size: 14px;
        }

        .product-info {
            flex: 1;
        }

        .product-title {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .price-section {
            margin-bottom: 20px;
        }

        .current-price {
            font-size: 32px;
            color: #e74c3c;
            font-weight: bold;
        }

        .stock-status {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }

        .product-meta {
            margin: 20px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }

        .product-meta p {
            margin: 5px 0;
            font-size: 14px;
            line-height: 1.6;
        }

        .product-meta strong {
            color: #333;
        }

        .category-tags {
            margin: 20px 0;
        }

        .category-tags span {
            color: #666;
            font-size: 14px;
        }

        .category-tags a {
            color: #6b9d3e;
            text-decoration: none;
        }

        .tabs {
            background-color: white;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .tab-header {
            border-bottom: 2px solid #e0e0e0;
            padding: 0 30px;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: 15px 20px;
            cursor: pointer;
            font-size: 16px;
            color: #666;
            border-bottom: 3px solid transparent;
            margin-bottom: -2px;
        }

        .tab-btn.active {
            color: #6b9d3e;
            border-bottom-color: #6b9d3e;
            font-weight: bold;
        }

        .tab-content {
            padding: 30px;
        }

        .description h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .description p {
            line-height: 1.8;
            margin-bottom: 15px;
            color: #666;
        }

        .description ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .description li {
            margin-bottom: 8px;
            line-height: 1.6;
            color: #666;
        }

        .section-title {
            font-size: 24px;
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: #f5f5f5;
            border-radius: 8px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #000;
            color: white;
            padding: 5px 10px;
            font-size: 11px;
            border-radius: 3px;
            font-weight: bold;
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
        }

        .product-card-info {
            padding: 15px;
        }

        .product-name {
            font-size: 13px;
            margin-bottom: 10px;
            height: 40px;
            overflow: hidden;
            cursor: pointer;
            line-height: 1.4;
        }

        .product-name:hover {
            color: #6b9d3e;
        }

        .product-price {
            color: #6b9d3e;
            font-weight: bold;
            font-size: 15px;
        }

        .recently-viewed {
            margin-top: 50px;
        }

        .recently-title {
            font-size: 20px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .view-all {
            color: #6b9d3e;
            text-decoration: none;
            font-size: 14px;
        }

        .recently-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 15px;
        }

        .recently-item {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        .recently-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .footer {
            background-color: white;
            padding: 40px 20px;
            margin-top: 60px;
            border-top: 1px solid #e0e0e0;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }

        .footer-section h3 {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #666;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-section a:hover {
            color: #6b9d3e;
        }

        .footer-text {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .payment-icons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .payment-icons img {
            height: 30px;
        }

        .marketplace-logos {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 15px;
        }

        .marketplace-logos img {
            height: 40px;
            width: auto;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #e0e0e0;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 30px auto 0;
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .chat-button {
            position: fixed;
            bottom: 90px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: #0084ff;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .recently-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-section {
                flex-direction: column;
            }

            .product-gallery {
                flex: 1;
                max-width: 100%;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .recently-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-container">
            <div class="logo">
                <img src="https://via.placeholder.com/40" alt="Organic Shop">
                <span style="font-weight: bold; color: #6b9d3e;">Organic</span>
            </div>
            <div class="search-container">
                <select class="search-select">
                    <option>All</option>
                    <option>Ăn dặm</option>
                    <option>Các loại hạt</option>
                    <option>Sữa thực vật</option>
                </select>
                <input type="text" class="search-input" placeholder="Gõ vào tên sản phẩm bạn muốn tìm">
                <button class="search-btn">Tìm</button>
            </div>
            <div class="header-right">
                <div class="phone">
                    <span class="phone-label">Hotline</span>
                    <span class="phone-number">0906 913 227</span>
                </div>
                <div class="cart">
                    🛒
                    <span class="cart-badge">0</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="nav">
        <div class="nav-container">
            <a href="#home">HOME</a>
            <a href="#shop">VỀ ORGANIC SHOP</a>
            <a href="#blog">BLOG'S ORGANIC</a>
            <a href="#contact">LIÊN HỆ</a>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="#">Home</a> / <a href="#">Ngũ cốc hữu cơ</a> / Nui ống Spirulina hữu cơ Sottolestelle 500g (Sao chép)
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Product Section -->
        <div class="product-section">
            <div class="product-gallery">
                <div class="main-image">
                    <img src="https://via.placeholder.com/400x400" alt="Product">
                </div>
                <div class="thumbnail-strip">
                    Hãy click vào hình sản phẩm để phóng to
                </div>
            </div>

            <div class="product-info">
                <h1 class="product-title">Nui ống Spirulina hữu cơ Sottolestelle 500g (Sao chép)</h1>
                
                <div class="price-section">
                    <div class="current-price">155,000đ</div>
                    <div class="stock-status">Tình trạng: Hết hàng</div>
                </div>

                <div class="product-meta">
                    <p><strong>Xuất xứ:</strong> Sottolestelle</p>
                    <p><strong>Mã sản phẩm:</strong> Nui ống hữu cơ Spirulina 500g có 25% chứng nhận Hữu cơ Châu Âu</p>
                    <p><strong>Thương hiệu:</strong> Sottolestelle</p>
                </div>

                <div class="category-tags">
                    <span><strong>Danh mục:</strong> <a href="#">Nui mì hữu cơ, Sản phẩm mới, Thực phẩm hữu cơ</a></span>
                </div>
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="tabs">
            <div class="tab-header">
                <button class="tab-btn active">Mô tả</button>
            </div>
            <div class="tab-content">
                <div class="description">
                    <h3>Thành phần chính tốt và được nhập mang được hữu cơ khỏe cho các thành viên trong gia đình cây hữu cơ, nội dung</h3>
                    
                    <p>Sản phẩm là một nui ống được làm với lòng đỏ đậm được sannishca degli giúp như ơ hết với 25% Spirulina được cân giau, đậm sinh các từ qui các liến là giau (25 và caroi được quan trọng nhất của chúng. Nhất tất phẩm nhu trong, các đầu phẩm từ giúp Spirulina đỏa có rất nhiễu tất từ thực nhỏ phản rất gồm, như các carotene...</p>

                    <p>Sản phẩm bản tập chính tốt đồng lòng thì chương làm hướng, Pthangychun, Phytophycocyanin vật, được các hiểm thúc từ hải sản này nội và gội trung hồ có là, không vì, nhiễm hầu việc từ hết làm với lại các qui gian rốt</p>

                    <p>Phương thay các các hồi với sinh tần các tạo biên lắm, hạnh việc ở chung, và ở trong khác với họ và với tạch sản</p>

                    <p>Sản phẩm giúp giải hại với chất, cảm một từ hối số vị biến như các làm các rồi sống bé từ lò giỏi nhiều hồ thời chính một giúc làm của hạt sang phoiein</p>

                    <p><strong>HDSD:</strong></p>

                    <p>Dụng ở tùng nội từ 2-3 chính vô với hện một đồng tấy và 1 giấu hạch, tối một hám vù một các tấc với liên nữ gọi các đã hết, gản tất và hối hữ làm với các tạo tại hồn</p>

                    <p>Đủ hậu các chú chung lớn với tấc cân hươu với những như rỗi sản với tấc các hôi là bển việc các tấc với liền gian viện định với đám các hồi của thực sàng person.</p>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <h2 class="section-title">Sản phẩm khác</h2>
        <div class="product-grid">
            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Mì Ống mì rau Hữu cơ cứ ra 6+ tháng tuổi Anah Organics 200g...</div>
                    <div class="product-price">79,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Mì xoắn nước Hữu cơ cho Trẻdương thánh 6+ tháng Dalla Sottolestelle 300g - Organic...</div>
                    <div class="product-price">90,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui rau lén cứ nội lên 300g Dalla Costa</div>
                    <div class="product-price">95,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Mì sợi Spaghetti Hữu cơ Sottolestelle 500g - Organic Spirulina Cappelli Wheat Spaghetti</div>
                    <div class="product-price">95,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui xoắn Nổi cứ rất làm hồi từ 300g Dalla Costa</div>
                    <div class="product-price">95,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui xoắn Hữu cơ rất làm hồi từ 300g Dalla Costa</div>
                    <div class="product-price">95,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui ống toàn đền nói rối hồ đa 6+ tháng tuổi Anah Organics 200g - Organic...</div>
                    <div class="product-price">110,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui nâu rồi hạch lên từ hỗi 6+ tháng tuổi 250g Anah</div>
                    <div class="product-price">85,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Mì xoắn rồi hữu từ hỗi 6+ tháng tuổi 250g Anah Organics</div>
                    <div class="product-price">79,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui nâu rồi lên từ hỗi 6+ tháng tuổi 250g Anah</div>
                    <div class="product-price">79,000đ</div>
                </div>
            </div>

            <div class="product-card">
                <span class="badge">Hết hàng</span>
                <img src="https://via.placeholder.com/200" alt="Product" class="product-image">
                <div class="product-card-info">
                    <div class="product-name">Nui nâu rồi lên Đá Khoái từ nội càng Dalla Costa</div>
                    <div class="product-price">125,000đ</div>
                </div>
            </div>
        </div>

        <!-- Recently Viewed -->
        <div class="recently-viewed">
            <div class="recently-title">
                <span>Các sản phẩm bạn đã xem</span>
                <a href="#" class="view-all">Xem</a>
            </div>
            <div class="recently-grid">
                <div class="recently-item">
                    <img src="https://via.placeholder.com/150" alt="Recently viewed">
                </div>
                <div class="recently-item">
                    <img src="https://via.placeholder.com/150" alt="Recently viewed">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Organic Shop</h3>
                <p class="footer-text">Bán lẻ online các mặt hàng thực phẩm Organic, non-GMO của Đức, Mỹ, Úc. Sản phẩm được các tổ chức chứng nhận USDA, EU Organic, Nasaa, JAS.</p>
                <p class="footer-text"><strong>Địa chỉ:</strong> 167B Đống Đắc, Khu phố 7, Phường Tân Chánh Hiệp, Quận 12, Tp Hồ Chí Minh, Việt Nam</p>
                <p class="footer-text"><strong>Hotline:</strong> 0906 913 227</p>
                <p class="footer-text"><strong>Email:</strong> online@organicshop.com.vn</p>
                <p class="footer-text"><strong>Website:</strong> Organicshop.com.vn</p>
            </div>

            <div class="footer-section">
                <h3>Chính sách bán hàng</h3>
                <ul>
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                    <li><a href="#">Chính sách giao hàng</a></li>
                    <li><a href="#">Cam kết chất lượng</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                    <li><a href="#">Bảo mật thông tin</a></li>
                    <li><a href="#">Liên hệ mua sỉ</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Kết nối nhanh</h3>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Ngũ cốc</a></li>
                    <li><a href="#">Mỹ phẩm hữu cơ</a></li>
                    <li><a href="#">Gia vị hữu cơ</a></li>
                    <li><a href="#">Siêu thực phẩm</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Thanh toán thuận tiện</h3>
                <div class="payment-icons">
                    <img src="https://via.placeholder.com/50x30" alt="Cash">
                    <img src="https://via.placeholder.com/50x30" alt="ATM">
                    <img src="https://via.placeholder.com/50x30" alt="Visa">
                    <img src="https://via.placeholder.com/50x30" alt="Mastercard">
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
