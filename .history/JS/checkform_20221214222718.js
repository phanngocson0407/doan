$(function () {
  $("#form").validate({
    rules: {
      username: {
        required: true,
        username: true,
      },
      city: {
        required: true,
        city: true,
      },
      address: {
        required: true,
        address: true,
      },
      phone: {
        required: true,
        phone: true,
      },
      email: {
        required: true,
        email: true,
      },
    },
  });
});
