$("#form").validate({
  rules: {
    username: {
      required: true,
      minlength: 6,
    },
    city: {
      required: true,
      minlength: 6,
    },
    address: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    username: {
      required: "Vui lòng nhập vào tên",
      minlength: "Độ dài tối thiểu 6 kí tự",
    },
    city: {
      required: "Vui lòng nhập vào tỉnh/thành phố",
      minlength: "Độ dài tối thiểu 6 kí tự",
    },
    address: {
      required: "Vui lòng nhập vào địa chỉ",
      minlength: "Độ dài tối thiểu 6 kí tự",
    },
  },
});
