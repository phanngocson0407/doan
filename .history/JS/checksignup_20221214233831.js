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
      maxlength: 12,
    },
    password: {
      requied: true,
      minlength: 8,
    },
    repass: {
      requied: true,
      minlength: 8,
    },
  },
  messages: {
    tenkhachhang: "vui lòng nhập tên!!!",
    phone: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 11 kí tự ",
    },
    username: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 11 kí tự ",
    },
    password: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 11 kí tự ",
    },
    repass: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 11 kí tự ",
    },
  },
});
