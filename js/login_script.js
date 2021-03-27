function login(url) {
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;

  if (username == '' || username != username || password == '') {
    alert('Anda belum memasukkan akun');
  } else {
    alert('Selamat datang ' + username);
    window.location = url;
  }
  document.forms[0].reset();
}
// function message() {
//   let username = document.getElementById('username').value;
//   if (username == '' || username != username) {
//     alert('Form anda masih kosong');
//   } else {
//     alert('Terima kasih ' + username);
//   }
//   document.forms[0].reset();
// }
// function pindah(url) {}
