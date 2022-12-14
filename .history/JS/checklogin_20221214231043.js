$("#formlogin").validate({
  rules: {
    username: {
      required: true,
      minlength: 6,
    },
    password: {
      required: true,
      minlength: 8,
    },
  },
  messages: {
    username: {
        required: "Vui lòng nhập tài khoản",
        minlength: "Tài khoản tối đa cần 6 kí tự"
    }

    password: "Vui lòng nhập  mật khẩu",
  },
});
