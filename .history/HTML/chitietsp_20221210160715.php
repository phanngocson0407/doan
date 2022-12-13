<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/CN_BanHang.css" />
    <link rel="stylesheet" href="../CSS/sanpham.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../fontawesome-free-6.1.2-web/css/all.css" />
    <title>Document</title>
  </head>
  <body>
    <?php $id_sp=$_GET['id']; ?>
    <input type="hidden" id="id_sp" value="<?php echo $id_sp ?>">
    <div id="main">
      <header id="header">
        <nav class="container">
          <div class="header_logo_main">
            <a class="header_logo" href="Project_CN_BanHang.php"
              ><img src="../PICTURE/Logo-1.png" alt="logo_hmk"
            /></a>
          </div>
          <div class="header_menu_main">
            <ul class="header_sub_menu">
              <li>
                <a href="Project_CN_BanHang.php" class="sub_menu_name"
                  >Trang chủ</a
                >
              </li>
              <li>
                <a href="Project_CN_BanHang.php #product" class="sub_menu_name"
                  >Sản phẩm</a
                >
              </li>
              <li>
                <a
                  href="Project_CN_BanHang.php #post-list"
                  class="sub_menu_name"
                  >Blog</a
                >
              </li>
              <li>
                <a href="address.html" class="sub_menu_name"
                  >Hệ thống cửa hàng</a
                >
              </li>
              <li>
                <a href="about_us.html" class="sub_menu_name">Về chúng tôi</a>
              </li>
            </ul>
          </div>
          <div class="header_user">
            <form action="" id="search-box">
              <input type="text" id="search-text" placeholder="Tìm kiếm...." />
              <button id="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>

            <a href="../HTML/dangnhap.php" class="user js-btn-user">
              <i class="fa-solid fa-user"></i>
            </a>
            <a class="cart" href="../HTML/cart.php"
              ><i class="fa-solid fa-cart-shopping"></i>
              <ul class="cart_more">
                <li>Chưa có sản phẩm nào trong giỏ hàng</li>
              </ul>
            </a>
          </div>
        </nav>
      </header>
      <div class="content" id="chitiet_sp">
        <form action="../HTML/cart.php">
          <div class="product" >
            <div class="product_img">
              <img src="../images/sanpham/hmk-03-1.jpg" alt="03" />
            </div>
            <div class="product_form">
              <div class="product_name">
                <h1>Mắt kính cận-kinh loại– HMK15</h1>
              </div>
              <div class="border"></div>

              <div class="product_price margin15"><p>Giá: 100000đ</p></div>

              <div class="product_color margin15">
                <p>Màu sắc</p>
                <select name="" id="" class="color_more">
                  <option value="hong">Hồng</option>
                  <option value="bac">Bạc</option>
                  <option value="den">Đen</option>
                </select>
              </div>
              <div class="product_amount margin15">
                <button class="minus_btn" onclick="handleMinus()">
                  <i class="fa-solid fa-minus"></i>
                </button>
                <input type="text" name="amount" id="amount" value="1" />
                <button class="plus_btn" onclick="handlePlus()">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div>
              <button class="btn_them"  type="submit">THÊM VÀO GIỎ HÀNG</button>
            </div>
          </div>
        </form>
      </div>
      <footer>
        <ul class="footer-list">
          <li>
            <div class="footer-name">
              <h2>GIỚI THIỆU</h2>
            </div>
            <div class="footer-info">
              <p>
                Cửa hàng chuyên cung cấp các loại mắt kính – gọng kính với mức
                giá phù hợp với tâm lý khách hàng và có tính cạnh tranh cao. HMK
                Eyewear luôn luôn mong muốn làm hài lòng tất cả khách hàng.
              </p>
            </div>
            <div class="footer-link">
              <a href=""><img src="../PICTURE/dathongbao.webp" alt="" /></a>
            </div>
          </li>
          <li>
            <div class="footer-name">
              <h2>LIÊN KẾT</h2>
            </div>

            <div class="footer-link">
              <a class="link" href=""> Giấy Chứng Nhận</a>
              <a class="link" href=""> Thanh toán – Mua hàng</a>
              <a class="link" href=""> Ưu đãi/ Khuyến mãi</a>
            </div>
          </li>
          <li>
            <div class="footer-name">
              <h2>LIÊN HỆ</h2>
            </div>
            <div class="footer-info">
              <p>
                <span>Địa chỉ:</span> 231 Nguyễn Trãi, P.Nguyễn Cư Trinh, Q.1
              </p>
              <p>
                <span>Hotline:</span>
                <a href="" style="color: #fff; text-decoration: none"
                  >1900 9368</a
                >
              </p>
              <p><span>Email:</span> matkinhhmk@gmail.com</p>
            </div>
          </li>
          <li>
            <div class="footer-name">
              <h2>MẠNG XÃ HỘI</h2>
            </div>
            <div class="footer-info"></div>
            <div class="footer--link">
              <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              <a href=""><i class="fa-brands fa-tiktok"></i></a>
              <a href=""><i class="fa-brands fa-instagram"></i></a>
              <a href=""><img src="../PICTURE/mShopee.webp" alt="" /></a>
            </div>
          </li>
        </ul> 
      </footer>
      <div class="copy-right">
        <div class="copy-title">Copyright 2022 © <span>HMK Eyewear</span></div>
      </div>
    </div>
    <div id="back-top">
      <i class="fa-solid fa-chevron-up"></i>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="..//JS/CN_BanHang.js"></script>
    <script src="../JS/amount.js"></script>
    <!-- <script src="../JS/sanpham_chitiet.js?v5"></script> -->
  </body>
</html>
