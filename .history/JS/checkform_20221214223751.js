$(document).ready(function () {
  $("#form").validate({
    rules: {
      username: {
        required: true,
        username: true,
      },
    },
    messages: {
      username: {
        required: "Vui lòng nhập vào email",
        username: "Nhập đúng định dạng",
      },
    },
  });
});
