$("#formlogin").validate({
  rules: {
    username: {
      required: true,
      minlength: 8,
    },
    password: {
      required: true,
    },
  },
  messages: {
    name: "Vui lòng nhập tên!",
    email: {
      required: "Vui lòng nhập vào email",
      email: "Nhập đúng định dạng email đê :D",
    },
    password: {
      required: "Vui lòng nhập mật khẩu!",
      minlength: "Độ dài tối thiểu 6 kí tự",
      maxlength: "Độ tài tối đa 15 kí tự",
    },
    checkbox: "Xác nhận Admin đẹp zai",
  },
});
