$("#formdangki").validate({
  rules: {
    tenkhachhang: "required",
    phone: {
      requied: true,
      minlength: 10,
      maxlength: 11,
    },
    username: {
      requied: true,
      minlength: 6,
    },
    password: {
      requied: true,
      minlength: 8,
    },
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
