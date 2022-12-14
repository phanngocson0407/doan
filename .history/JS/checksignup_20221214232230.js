$("#formdangki").validate({
  rules: {
    tenkhachhang: "required",
    phone: {
      requied: true,
      minlength: 10,
      maxlength: 11,
    },
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
