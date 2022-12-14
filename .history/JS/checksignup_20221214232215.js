$("#formdangki").validate({
  rules: {
    tenkhachhang: "required",
    phone: {
      requied: true,
    },
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
