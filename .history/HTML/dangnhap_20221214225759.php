<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/dangnhap.css" />
  </head>
  <body>
    <header>
      <a href="../HTML/Project_CN_BanHang.php"
        ><img src="../PICTURE/Logo-1.png" alt=""
      /></a>
    </header>
    <div class="modal js-modal">
      <div class="modal-container">
        <div class="model-close js-modal-close">
          <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="modal-login">
          <h3>ĐĂNG NHẬP</h3>
        </div>
        <div class="form-login">
          <form action="../PHP/login_controller.php" id="formlogin">
            <div class="info-user">
              <label for="input-account"
                >Tên tài khoản hoặc địa chỉ email *</label
              >
              <input type="text" id="input-account" name="username" />
              <label for="input-password">Mật khẩu *</label>
              <input type="password" id="input-password" name="password" />
              
            <?php
            session_start();
             $err=$_SESSION["err"]?$_SESSION["err"]:"";
             if(isset($_SESSION['tenkhachhang'])) header("Location: ../HTML/Project_CN_BanHang.php");
             ?>
            <small style="color:red"><?php echo $err;?></small>
            </div>
            <div class="remember">
              <input type="checkbox" name="" id="cbx-remember_passowrd" />
              <label for="cbx-remember_passowrd">Ghi nhớ mật khẩu</label>
            </div>
            <button type="submit"  >ĐĂNG NHẬP</button>
            <div class="support-form">
              <p>
                <a href="dangki.php" class="forget-password"
                  >Tạo tài khoản ngay</a
                >
              </p>
              <p><a href="" class="forget-password">Quên mật khẩu?</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
  </body>
</html>
