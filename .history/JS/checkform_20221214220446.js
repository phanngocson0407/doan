function formValidate() {
  var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
  var phone = document.getElementById("phone").value;
  if (regExp.test(phone)) alert("SĐT hợp lệ!");
  else alert("SĐT không hợp lệ!");
}
