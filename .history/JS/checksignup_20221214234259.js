$("#formdangki").validate({
  rules: {
    tenkhachhang: {
      required: true,
    },
    phone: {
      required: true,
      minlength: 10,
      maxlength: 11,
    },
    username: {
      required: true,
      minlength: 6,
      maxlength: 12,
    },
    password: {
      required: true,
      minlength: 8,
    },
    repass: {
      required: true,
      minlength: 8,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    tenkhachhang: {
      required: "vui lòng nhập tên!",
    },
    phone: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 11 kí tự ",
    },
    username: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 10 kí tự",
      maxlength: " tối đa 12 kí tự ",
    },
    password: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 8 kí tự",
    },
    repass: {
      requied: "vui lòng nhập số điện thoại",
      minlength: " cần tối thiểu 8 kí tự",
    },
    email: {
      required: "Vui lòng nhập vào email",
      email: "Nhập đúng định dạng email",
    },
  },
});
