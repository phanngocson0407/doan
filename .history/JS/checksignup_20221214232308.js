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
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
