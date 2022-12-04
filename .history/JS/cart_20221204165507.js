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
                  <img src="${link_web + item.img_sp}" alt="03" />
                  <p>${item.tensanpham}-${item.chat_lieu}– ${item.masanpham}</p>
                </td>
                <td>${item.gia}đ</td>
                <td><div class="product_amount margin15">
                <button class="minus_btn" onclick="handleMinus()">
                  <i class="fa-solid fa-minus"></i>
                </button>
                <input type="text" name="amount" id="amount" value="1" />
                <button class="plus_btn" onclick="handlePlus()">
                  <i class="fa-solid fa-plus"></i>
                </button>
              </div></td>
                <td>${item.gia}đ</td>
              </tr>

              <tr>
                <td>Tổng:</td>
                <td>${item.gia}đ</td>
              </tr>
            </tbody>
          </table>
          <div class="back_product">
            <a href="Project_CN_BanHang.php #product "
              ><i class="fa-solid fa-arrow-left"></i>TIẾP TỤC XEM SẢN
              PHẨM</a
            >
          </div>
          <a class="thanhtoan" type="submit">
            TIẾN HÀNH THANH TOÁN
          </a>
        </form>
      </div>
                `;
      });
      $("#cart-shop").html(output);
    },
  });
}
$(document).ready(function () {
  show_sanpham();
});
