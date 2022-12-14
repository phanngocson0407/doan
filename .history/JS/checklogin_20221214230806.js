$("#formlogin").validate({
  rules: {
    username: {
      required: true,
    },
    password: {
      required: true,
    },
  },
  messages: {
    username: "Vui lòng nhập tài khoản",

    password: "Vui lòng nhập  mật khẩu",
  },
});
