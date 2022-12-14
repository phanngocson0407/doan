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
        <div class="info_product">
              <h3>Đơn hàng của bạn</h3>
              <table cellspacing="10">
                <thead>
                  <tr>
                    <th>SẢN PHẨM</th>
                    <th>TỔNG</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>${item.tensanpham}-${item.chat_lieu}– ${item.masanpham}</td>
                    <td> ${item.gia} vnđ</td>
                  </tr>
                </tbody>
  
              </table>
            </div>
            <a href="../PHP/donhang_controller.php?id=${item.id_sp}" class="btn_them">MUA NGAY</a>
              </div>
                `;
      });
      $("#product_thanhtoan").html(output);
    },
  });
}
$(document).ready(function () {
  show_sanpham();
});