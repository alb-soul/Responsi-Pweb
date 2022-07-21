var users = []

var myInputpw = document.getElementById("pwd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInputpw.onfocus = function () {
  document.getElementById("message").style.display = "block";
};
myInputpw.onblur = function () {
  document.getElementById("message").style.display = "none";
};

myInputpw.onkeyup = function () {
  var lowerCaseLetters = /[a-z]/g;
  if (myInputpw.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  //Validasi huruf besar
  var upperCaseLetters = /[A-Z]/g;
  if (myInputpw.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  //Validasi angka
  var numbers = /[0-9]/g;
  if (myInputpw.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  //Validasi pjg pw
  if (myInputpw.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
};

//Validasi form input
function validasiForm() {
  var name = document.forms["daftar"]["name"].value;
  var userName = document.forms["daftar"]["username"].value;
  var userEmail = document.forms["daftar"]["email"].value;
  var userPassword = document.forms["daftar"]["password"].value;
 
  if (
    name == "" ||
    userName == "" ||
    userEmail == "" ||
    userPassword == ""
  ) {
    document.getElementById("daftar").action = "signup.php";
    alert("Kolom input harus diisi semua!");
  } else {
    users.push({name, userName, userEmail, userPassword});
    console.table(users);
    document.getElementById("daftar").action = "signupproses.php";
    alert("Berhasil!");
  }
  return true;
}



function userLogin() {
  var userName = document.forms["login"]["username"].value;
  var userPassword = document.forms["login"]["password"].value;

  for (var i in users) {
    var user = users[i];
    console.table(user)

    if (userName === user.userName && userPassword === user.userPassword) {
      return alert("Berhasil!");
    }
  }
}