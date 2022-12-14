$("#formdangki").validate({
  rules: {
    tenkhachhang: "required",
    phone: {
      requied: true,
      minlength: 10,
    },
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
