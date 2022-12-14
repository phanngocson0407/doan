$("#form").validate({
  rules: {
    username: {
      required: true,
      minlength: 6,
    },
    city: {
      required: true,
    },
    address: {
      required: true,
    },
    phone: {
      required: true,
      minlength: 10,
      maxlength: 11,
    },
    email: {
      required: true,
      email: true,
    },
  },
  messages: {
    username: {
      required: "Vui lòng nhập vào tên",
      minlength: "Độ dài tối thiểu 6 kí tự",
    },
    city: {
      required: "Vui lòng nhập vào tỉnh/thành phố",
    },
    address: {
      required: "Vui lòng nhập vào địa chỉ",
    },
    phone: {
      required: "Vui lòng nhập vào so điện thoại",
      minlength: "Độ dài tối thiểu 10 số",
      maxlength: "độ dài tối đa 11 số",
    },
    email: {
      required: "Vui lòng nhập vào email",
      email: "Nhập đúng định dạng email!",
    },
  },
});
