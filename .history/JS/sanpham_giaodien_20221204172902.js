let link_web = "http://localhost/doan/";
function show_sanpham() {
  $.ajax({
    url: "../PHP/sp_controller.php",
    type: "POST",
    data: {
      loaiquanly: "list_sp",
    },
    dataType: "json",
    headers: {
      Authorization: "Basic ",
    },
    success: function (response) {
      let output = "";
      $.each(response, function (k, item) {
        output += `
                <li>
                <div class="product-item" >
                  <div class="product-top">
                    <a href="chitietsp.php?id=${
                      item.id_sp
                    }" class="product-thumb">
                      <img height="50px" width="100%" class="img-fist" src="${
                        link_web + item.img_sp
                      }" />
                    </a>
                    <a href="chitietsp.php?id=${
                      item.id_sp
                    }"  " class="buynow">XEM NHANH</a>
                  </div>
                  <div class="product-info">
                    <a href="" class="product-name">${item.tensanpham}-${
          item.chat_lieu
        }– ${item.masanpham}</a>
                    <div>
                      <p class="product-price"><?=number_format(${
                        item.gia
                      }, 0, '', '.')?> VND </p>
                      <a href="chitietsp.php?id=${
                        item.id_sp
                      }"  " class="product-more">MUA NGAY</a>
                    </div>
                  </div>
                </div>
              </li>
                `;
      });
      $("#content_sanpham").html(output);
    },
  });
}
$(document).ready(function () {
  show_sanpham();
});
