<?php
session_start();
?>
<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/CN_BanHang.css" />

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
                <a href="#" class="sub_menu_name">Trang chủ</a>
              </li>
              <li>
                <a href="#product" class="sub_menu_name">Sản phẩm</a>
              </li>
              <li><a href="#post-list" class="sub_menu_name">Blog</a></li>
              <li>
                <a href="address.php" class="sub_menu_name"
                  >Hệ thống cửa hàng</a
                >
              </li>
              <li>
                <a href="about_us.php" class="sub_menu_name">Về chúng tôi</a>
              </li>
            </ul>
          </div>
          <div class="header_user">
            <form action="" id="search-box" method="get">
              <input type="text" id="search-text" name="timkiem" placeholder="Tìm kiếm...." />
              <button  type="submit" id="search-btn" name="btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </form>
 
 
 

            <?php
                if (isset($_SESSION['tenkhachhang'])) {
                ?>
                <div class="d-flex justify-content-center align-items-center gap-2">
                  <a href="#" class=""><?= $_SESSION['tenkhachhang']; ?></a>
                  <a class="btn btn-warning ml-2" href="../HTML/dangxuat.php">Log out</a>
                </div>
                <?php
                } else {
                ?>
                <a href="../HTML/dangnhap.php"><i class="fa fa-user"></i> Login</a>
                <?php
                }
                ?>
            <!-- <a href="../HTML/dangnhap.php" class="user js-btn-user">
              <i class="fa-solid fa-user"></i>
            </a> -->
            <!-- <a class="cart" href="../HTML/cart.php"
              ><i class="fa-solid fa-cart-shopping"></i>
              <ul class="cart_more">
                <li>Chưa có sản phẩm nào trong giỏ hàng</li>
              </ul>
            </a> -->
          </div>
        </nav>
      </header>

      <div class="slider-image">
        <div class="slider-item">
          <div class="image">
            <img src="../PICTURE/slider_1.png" alt="slider_1" />
          </div>
        </div>
        <div class="slider-item">
          <div class="image">
            <img src="../PICTURE/slider-3-1400x533.jpg" alt="slider_2" />
          </div>
        </div>
      </div>
      <div id="shipping-content">
        <div class="shipping-item">
          <div class="item-icon">
            <i class="fa-solid fa-gift"></i>
          </div>
          <div class="item-content">
            <h3>GIAO HÀNG TẬN NƠI</h3>
            <p>Xem hàng mới thanh toán</p>
          </div>
        </div>
        <div class="shipping-item">
          <div class="item-icon">
            <i class="fa-sharp fa-solid fa-truck"></i>
          </div>
          <div class="item-content">
            <h3>FREE SHIP TOÀN QUỐC</h3>
            <p>Đơn hàng từ 1,500,000 VNĐ</p>
          </div>
        </div>
        <div class="shipping-item">
          <div class="item-icon">
            <i class="fa-solid fa-phone"></i>
          </div>
          <div class="item-content">
            <h3>HỖ TRỢ – TƯ VẤN</h3>
            <p>Online / Offline 24/7</p>
          </div>
        </div>
      </div>
      <div id="product">
        <div id="title">
          <h2></h2>
          <p>SẢN PHẨM</p>
          <h2></h2>
        </div>
        <ul class="product-list" id="content_sanpham"></ul>
      </div>
      <div id="post-list">
        <div id="title">
          <h2></h2>
          <p>BÀI VIẾT</p>
          <h2></h2>
        </div>
        <div class="slider-post">
          <div class="post-item">
            <div class="post-img">
              <img
                src="../PICTURE/Can-loan-deo-kinh-nhu-the-nao-768x512.png"
                alt=""
              />
              <h4>Vừa cận vừa loạn đeo kính như thế nào? Cách đeo kính đúng</h4>
              <div class="border-post"></div>
              <p class="post-info">
                Đeo kính cận loạn thị là điều được nhiều người vô cùng quan tâm.
                Họ thắc mắc là vừa cận vừa loạn đeo kính như...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img src="../PICTURE/Deo-kinh-ap-trong-khi-boi.jpeg" alt="" />
              <h4>Đeo kính áp tròng có bơi được không? Mắt có bị sao không?</h4>
              <div class="border-post"></div>
              <p class="post-info">
                Nhiều người thường nghĩ rằng, bị tật khúc xạ mắt đeo kính áp
                tròng sẽ giúp bạn thoải mái bơi lội hơn đeo kính truyền...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img src="../PICTURE/Deo-kinh-ap-trong-1200x800.jpeg" alt="" />
              <h4>
                Đeo kính áp tròng khóc có sao không? Lens có bị trôi hay mờ
                không?
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Nhiều người thắc mắc, không biết đeo kính áp tròng khóc có sao
                không? Nhiều phụ nữ sử dụng kính áp tròng vì họ không...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img
                src="../PICTURE/Deo-kinh-ap-trong-khi-trang-diem.webp"
                alt=""
              />
              <h4>
                Đeo kính áp tròng trước hay sau khi trang điểm? Các lưu ý cần
                nhớ
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Đeo kính áp tròng trước hay sau khi trang điểm? là băn khoăn của
                không ít người, đặc biệt là các cô nàng bốn mắt....
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img src="../PICTURE/han-su-dung-kinh-ap-trong.jpeg" alt="" />
              <h4>
                Đeo kính áp tròng hết hạn bị sao? Cách nhận biết kính áp tròng
                hết hạn
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Bạn có biết rằng kính áp tròng cũng có hạn sử dụng? Đeo kính áp
                tròng hết hạn có tác hại gì? Chắc chắn có...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img src="../PICTURE/mat-kinh-chong-hoi-nuoc.jpg" alt="" />
              <h4>
                6 Cách đeo kính và khẩu trang không bị mờ, hấp hơi đơn giản
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Đối với những người bị cận thị, việc đeo khẩu trang có xu hướng
                khiến tròng kính bị hấp hơi và mờ. Điều này có...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img
                src="../PICTURE/Luu-y-khi-deo-kinh-sau-nang-mui.jpg"
                alt=""
              />
              <h4>
                Đeo kính sau nâng mũi có được không? Bao lâu thì đeo kính lại
                được
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Các bạn gái thường lo lắng không biết đeo kính sau nâng mũi có
                được hay không? Hãy đọc bài viết này ngay hôm nay...
              </p>
            </div>
          </div>
          <div class="post-item">
            <div class="post-img">
              <img
                src="../PICTURE/gong-kinh-duoc-lam-bang-chat-lieu-dac-biet-768x512.jpeg"
                alt=""
              />
              <h4>
                Các loại gọng kính cận đẹp tốt và được yêu thích nhất hiện nay
                2022
              </h4>
              <div class="border-post"></div>
              <p class="post-info">
                Hiện nay trên thị trường có các loại gọng kính cận khác nhau phù
                hợp với nhu cầu của bạn. Chúng được phân biệt dựa...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact">
        <div class="contact-item">
          <div class="contact-name">
            <h1>HOTLINE TƯ VẤN CHỌN KÍNH MIỄN PHÍ:</h1>
          </div>
          <div class="contact-phone"><a href="">1900 9368</a></div>
        </div>
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
    <script src="../JS/sanpham_giaodien.js?v3"></script>
  </body>
</html>
