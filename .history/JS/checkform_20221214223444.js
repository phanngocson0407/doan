$(document).ready(function () {
  $("#form").validate({
    rules: {
      username: "required",
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6,
        maxlength: 15,
      },
      checkbox: "required",
    },
    messages: {
      name: "Vui lòng nhập tên!",
      email: {
        required: "Vui lòng nhập vào email",
        email: "Nhập đúng định dạng email đê :D",
      },
    },
  });
});
