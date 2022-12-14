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
    username: "Vui lòng nhập tài khoản",

    password: "Vui lòng nhập  mật khẩu",
  },
});
