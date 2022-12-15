
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/dangki.css" />
  </head>
  <body>
    <header>
      <a href="../HTML/Project_CN_BanHang.php"
        ><img src="../PICTURE/Logo-1.png" alt=""
      /></a>
    </header>
    <nav id="container">
      <div class="name_form">
        <h1>ĐĂNG KÍ</h1>
      </div>
      <div id="form_dangki">
        <form action="../PHP/dangki_controller.php" method="post" id="formdangki">
        <input
            type="text"
            placeholder="Tên khách hàng"
            name="tenkhachhang"
            class="margin-top20"
          />
        <input
            type="number"
            placeholder="Số điện thoại"
            name="phone"
            class="margin-top20"
          />
        <input
            type="text"
            placeholder="Username"
            name="username"
            class="margin-top20"
          />
        <input    
            type="password"
            placeholder="Password"
            name="password"
            id="pass"
            class="margin-top20"
          />
        <input type="password" placeholder="Re-Password" class="margin-top20" name="repass"/>
        <input
            type="email"
            placeholder="Email"
            name="email"
            class="margin-top20"
          />
          <button type="submit" class="margin-top20">Đăng Ký Ngay</button>
        </form>
      </div>
      <div class="backlogin">
        <a href="../HTML/dangnhap.php" class="back">Đã có tài khoản</a>
      </div>
      <div class="other margin-top20">
        <p id="rules">
          Bằng cách nhấn Đăng Ký Ngay, bạn đồng ý với
          <span><a href="">Điều Khoản Dịch Vụ</a></span> và
          <span><a href="">Chính Sách Bảo Mật</a></span>
        </p>
      </div>
    </nav>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
    <script src="../JS/checksignup.js"></script>
  </body>
</html>
