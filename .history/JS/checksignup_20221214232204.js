$("#formdangki").validate({
  rules: {
    tenkhachhang: "required",
    phone: {},
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
  },
});
