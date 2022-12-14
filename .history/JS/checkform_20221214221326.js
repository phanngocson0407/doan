function formValidate() {
  var regExp = /^(0[234][0-9]{8}|1[89]00[0-9]{4})$/;
  var phone = document.getElementById("phone").value;
  if ((phone = "")) {
    document.getElementById("baoloi").innerHTML = "Chưa nhập username mà";
    return false;
  }
}
