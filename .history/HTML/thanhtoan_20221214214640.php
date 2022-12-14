<?php
session_start();
?>
<?php
$nameErr =$cityErr =$addressErr = $phoneErr = $emailErr = $moreErr = "";
$name =$city =$address =$phone = $email   = $more = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  if (empty($_POST["city"])) {
    $cityErr = "Name is required";
  } else {
    $city = test_input($_POST["city"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Name is required";
  } else {
    $address = test_input($_POST["address"]);
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
 

  if (empty($_POST["more"])) {
    $moreErr = "Comment is required";
  } else {
    $more = test_input($_POST["more"]);
  }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/CN_BanHang.css" />
    <link rel="stylesheet" href="../CSS/thanhtoan.css" />
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
                  >Trang ch???</a
                >
              </li>
              <li>
                <a href="Project_CN_BanHang.php #product " class="sub_menu_name"
                  >S???n ph???m</a
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
                  >H??? th???ng c???a h??ng</a
                >
              </li>
              <li>
                <a href="about_us.php" class="sub_menu_name">V??? ch??ng t??i</a>
              </li>
            </ul>
          </div>
          <div class="header_user">
          <form action="../HTML/search.php" id="search-box" method="get">
              <input type="text" id="search-text" name="timkiem" placeholder="Nh???p m?? s???n ph???m...." />
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
          </div>
        </nav>
      </header>
      <div class="checkout">
        <div class="checkout_name">
          <h2>TH??NG TIN THANH TO??N</h2>
        </div>
        <div class="border"></div>
        <div class="form_checkout">
                
          <form action="../PHP/donhang_controller.php " method="post">
            
            <div class="info_customer">
              <p>
                <label for="fullname"
                  >H??? v?? t??n <abbr title="B???t bu???c">*</abbr></label
                >
                <span><input type="text" name="username" /></span>
                <span class="error"> <?php echo $nameErr;?></span>
              </p>
 
              <p>
                <label for="city"
                  >T???nh/Th??nh Ph??? <abbr title="B???t bu???c">*</abbr></label
                >
                <span><input type="text" name="city" /></span>
                <span class="error"> <?php echo $cityErr;?></span>
              </p>
              <p>
                <label for="address"
                  >?????a ch??? <abbr title="B???t bu???c">*</abbr></label
                >
                <span><input type="text" name="address" /></span>
                <span class="error"> <?php echo $addressErr;?></span>
              </p>
              <p>
                <label for="phone"
                  >S??? ??i???n tho???i <abbr title="B???t bu???c">*</abbr></label
                >
                <span><input type="number" name="phone" /></span>
                <span class="error"> <?php echo $phoneErr;?></span>
              </p>
              <p>
                <label for="mail"
                  >?????a ch??? Email <abbr title="B???t bu???c">*</abbr></label
                >
                <span><input type="email" name="email" /></span>
                <span class="error"> <?php echo $emailErr;?></span>
              </p>
              <div class="oder">
                <h3>Th??ng tin b??? sung</h3>
                <p>
                  <label for="oder_cmt">Ghi ch?? ????n h??ng (T??y ch???n)</label>
                  <textarea
                    name="more"
                    id=""
                    placeholder="Ghi ch?? v??? ????n h??ng, v?? d???: th???i gian hay ch??? d???n ?????a ??i???m giao h??ng chi ti???t h??n."
                    rows="5"
                    cols="60"
                  ></textarea>
                  <span class="error"> <?php echo $moreErr;?></span>
                </p>
              </div>
            </div>

            <div class="info_product" id="product_thanhtoan">
              <h3>????n h??ng c???a b???n</h3>
              <table cellspacing="10">
                <thead>
                  <tr>
                    <th>S???N PH???M</th>
                    <th>T???M T??NH</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>G???ng k??nh Kim Lo???i - KL2302 - ??EN H???NG ?? 6</td>
                    <td>960,000???</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td>T???ng</td>
                    <td>960,000???</td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <button class="btn_dathang" type="submit">?????T H??NG</button>
          </form>
        </div>
      </div>
      <footer>
        <ul class="footer-list">
          <li>
            <div class="footer-name">
              <h2>GI???I THI???U</h2>
            </div>
            <div class="footer-info">
              <p>
                C???a ha??ng chuy??n cung c???p ca??c lo???i m????t ki??nh ??? g???ng k??nh v???i m???c
                gia?? phu?? h???p v???i t??m ly?? kha??ch ha??ng va?? co?? ti??nh c???nh tranh cao. HMK
                Eyewear lu??n lu??n mong mu???n la??m ha??i lo??ng t???t c??? kha??ch ha??ng.
              </p>
            </div>
            <div class="footer-link">
              <a href=""><img src="../PICTURE/dathongbao.webp" alt="" /></a>
            </div>
          </li>
          <li>
            <div class="footer-name">
              <h2>LI??N K???T</h2>
            </div>

            <div class="footer-link">
              <a class="link" href=""> Gi???y Ch???ng Nh???n</a>
              <a class="link" href=""> Thanh to??n ??? Mua h??ng</a>
              <a class="link" href=""> ??u ????i/ Khuy???n m??i</a>
            </div>
          </li>
          <li>
            <div class="footer-name">
              <h2>LI??N H???</h2>
            </div>
            <div class="footer-info">
              <p>
                <span>?????a ch???:</span> 231 Nguy???n Tr??i, P.Nguy???n C?? Trinh, Q.1
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
              <h2>M???NG X?? H???I</h2>
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
        <div class="copy-title">Copyright 2022 ?? <span>HMK Eyewear</span></div>
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
    <script src="../JS/thanhtoan.js?v5"></script>
  </body>
</html>
