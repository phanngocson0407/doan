$("#form").validate({
  rules: {
    username: {
      required: true,
      minlength: 6,
    },
    username: {
      required: true,
      minlength: 6,
    },
    username: {
      required: true,
      minlength: 6,
    },
  },
  messages: {
    username: {
      required: "Vui lòng nhập vào tên",
      minlength: "Độ dài tối thiểu 6 kí tự",
    },
  },
});
