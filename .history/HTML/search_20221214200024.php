<?php
session_start();
?>
<?php
    include('../PHP/config.php');
    if(isset($_GET['btn'])){
        $tukhoa = $_GET['timkiem'];
        $sql_timkiem = "SELECT *FROM `san_pham` WHERE `masanpham` LIKE '%$tukhoa%' ";
        $query_tiemkiem = mysqli_query($conn, $sql_timkiem);
    }else{
        $tukhoa="";
        $sql_timkiem = "SELECT *FROM `san_pham` WHERE `masanpham`  limit 5";
        $query_tiemkiem = mysqli_query($conn, $sql_timkiem);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/CN_BanHang.css" />
    <link rel="stylesheet" href="../CSS/search.css" />
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
                <a href="Project_CN_BanHang.php" class="sub_menu_name"
                  >Trang chủ</a
                >
              </li>
              <li>
                <a href="Project_CN_BanHang.php #product " class="sub_menu_name"
                  >Sản phẩm</a
                >
              </li>
              <li>
                <a
                  href="Project_CN_BanHang.php  #post-list"
                  class="sub_menu_name"
                  >Blog</a
                >
              </li>
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
            <form action="" id="search-box">
              <input type="text" id="search-text" placeholder="Tìm kiếm...." />
              <button id="search-btn">
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
          </div>
        </nav>
      </header>
      <div class="sanphamnoibat">
        <?php
        while($rowtimkiem = mysqli_fetch_array($query_tiemkiem)){
        ?>
        <form method="post"  action="../HTML/thanhtoan.php">
        <div class="product-item" >
                  <div class="product-top" style="display: inline-block; text-align: center; ">
                    <a href="" class="product-thumb" style="display: inline-block;">
                      <img height="400px" width="400px"   class="img-fist" src="../<?php echo $rowtimkiem['img_sp'] ?>" />
                    </a>
                    <a href=""   class="buynow">XEM NHANH</a>
                  </div>
                  <div class="product-info" >
                    <a href="" class="product-name"  style="font-size: 30px;" ><?php echo $rowtimkiem['tensanpham'] ?>- <?php echo $rowtimkiem['chat_lieu'] ?>– <?php echo $rowtimkiem['masanpham'] ?></a>
                    <div>
                      <p class="product-price" ><?php echo $rowtimkiem['gia'] ?>đ</p>
                      <a href=" ../HTML/thanhtoan.php"   class="product-more">MUA NGAY</a>
                    </div>
                  </div>
                </div>
                <div class="description">
                <div class="description_name">
                <h2>Mô tả</h2>
                </div>
                <div class="description_info">
                <p >– Tên sản phẩm: <b><?php echo $rowtimkiem['tensanpham'] ?></b></p>
                <p>– Mã sản phẩm: <b><?php echo $rowtimkiem['masanpham'] ?></b></p>
                <p>– Chất liệu: <b><?php echo $rowtimkiem['chat_lieu'] ?></b></p>

                <ul>
                    <li>
                    Gọng kính <?php echo $rowtimkiem['chat_lieu'] ?> tổng hợp chống gỉ sét. An toàn tuyệt đối.
                    </li>
                    <li>
                    Độ bền màu và tính đàn hồi cao. Ốc vặn được gia công kỹ lưỡng và
                    cẩn thận.
                    </li>
                    <li>
                    Đệm mũi êm ái, tạo cảm giác dễ chịu khi đeo, cân đối giữa hai bên
                    thái dương, mắt và sống mũi.
                    </li>
                    <li>Càng kính chắc chắn, không gây ra vết hằn khó chịu trên da.</li>
                    <li>Dễ phối đồ với nhiều phong cách khác nhau.</li>
                    <li>Phù hợp với nhiều khuôn mặt, cho cả nam và nữ.</li>
                </ul>
                <p>
                    – HMK eyewear cam kết 100% sản phẩm là ảnh thật shop tự chụp, khách
                    hàng có thể yên tâm về chất lượng sản phẩm. Nghiêm cấm mọi hành vi
                    sao chép hình ảnh.
                </p>
                <p>
                    – Vận chuyển từ 1-2 ngày đối với HCM và 3-4 ngày đối với các tỉnh
                    ngoại thành.
                </p>
                <p>
                    – Nếu có bất kỳ thắc mắc nào về thông tin sản phẩm hoặc vấn đề khác
                    xin quý khách vui lòng nhắn tin hoặc gọi điện qua số hotline: 1900
                    9368 để được hỗ trợ tư vấn tốt nhất.
                </p>
                <span><b>– Bộ sản phẩm của HMK Eyewear bao gồm: </b></span>
                <ul>
                    <li>Mắt Kính</li>
                    <li>Hộp Đựng Kính</li>
                    <li>Khăn Lau Kính.</li>
                </ul>
                <span><b>– Chính sách bảo hành của HMK: </b></span>
                <ul>
                    <li>
                    Đổi hàng trong vòng 3 ngày kể từ ngày nhận hàng nếu lỗi do NSX
                    (với điều kiện Giá trị sản phẩm đổi ngang bằng hoặc cao hơn giá
                    trị sản phẩm cũ).
                    </li>
                    <li>
                    HMK chịu trách nhiệm bảo hành kính mắt trong vòng 7 ngày kể từ
                    ngày cắt kính.
                    </li>
                    <li>
                    Trong quá trình đeo có bị lỏng ốc, Shop sẽ hỗ trợ vặn vít miễn phí
                    cho khách.
                    </li>
                    <li>Vệ sinh miễn phí kính định kỳ.</li>
                </ul>
                </div>
            </div>
        </form>
        <?php
        }
        ?>
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
  </body>
</html>
