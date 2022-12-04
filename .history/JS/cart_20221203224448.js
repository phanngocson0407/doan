let link_web = "http://localhost/doan/";
function show_sanpham() {
  $.ajax({
    url: "../PHP/sp_controller.php",
    type: "POST",
    data: {
      loaiquanly: "list_sp",
      id_sp: $("#id_sp").val(),
    },
    dataType: "json",
    headers: {
      Authorization: "Basic ",
    },
    success: function (response) {
      console.log(response);
      let output = "";
      $.each(response, function (k, item) {
        output += `
        <div class="cart_name">
        <h2>SHOPPING CART</h2>
      </div>
      <div class="cart_table">
        <form action="../HTML/thanhtoan.html">
          <table cellspacing="10">
            <thead>
              <tr>
                <th>SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>TẠM TÍNH</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img src="../images/sanpham/hmk-03-1.jpg" alt="03" />
                  <p>Kính Mát KM72019 - ĐEN KHÓI</p>
                </td>
                <td>123213</td>
                <td><input type="text" name="" id="" /></td>
                <td></td>
              </tr>

              <tr>
                <td>Tổng:</td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <div class="back_product">
            <a href="Project_CN_BanHang.html #product "
              ><i class="fa-solid fa-arrow-left"></i>TIẾP TỤC XEM SẢN
              PHẨM</a
            >
          </div>
          <button class="thanhtoan" type="submit">
            TIẾN HÀNH THANH TOÁN
          </button>
        </form>
      </div>
                `;
      });
      $("#chitiet_sp").html(output);
    },
  });
}
$(document).ready(function () {
  show_sanpham();
});
