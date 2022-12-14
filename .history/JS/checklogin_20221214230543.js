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
    username: "Vui lòng nhập tên!",

    password: "Vui lòng nhập tên!",
  },
});
