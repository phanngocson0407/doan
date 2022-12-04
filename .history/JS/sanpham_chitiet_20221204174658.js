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
            <div class="content_name">
                <h2>Chi tiết sản phẩm</h2>
            </div>
            <form>
            <div class="product" >
                <div class="product_img">
                <img src="${link_web + item.img_sp}" alt="03" />
                </div>
                <div class="product_form">
                <div class="product_name">
                    <h1>${item.tensanpham}-${item.chat_lieu}– ${
          item.masanpham
        }</h1>
                </div>
                <div class="border"></div>

                <div class="product_price margin15"><p>${item.gia}đ</p></div>
                <input type="text" name=" " id="amount" value="1" />
                 
                <a href="../HTML/cart.php?id=${
                  item.id_sp
                }" class="btn_them">THÊM VÀO GIỎ HÀNG</a>
                </div>
            </div>
            </form>
            </div>
            <div class="description">
                <div class="description_name">
                <h2>Mô tả</h2>
                </div>
                <div class="description_info">
                <p >– Tên sản phẩm: <b>${item.tensanpham}</b></p>
                <p>– Mã sản phẩm: <b>${item.masanpham}</b></p>
                <p>– Chất liệu: <b> ${item.chat_lieu}</b></p>

                <ul>
                    <li>
                    Gọng kính ${
                      item.chat_lieu
                    } tổng hợp chống gỉ sét. An toàn tuyệt đối.
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
                `;
      });
      $("#chitiet_sp").html(output);
    },
  });
}
$(document).ready(function () {
  show_sanpham();
});
