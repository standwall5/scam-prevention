let loginButton = document.getElementById("login");
let signupButton = document.getElementById("signup");
let loginFormContainer = document.getElementById("loginFormContainer");
let loginForm = document.getElementById("loginForm");
let closeLogin = document.getElementById("closeLogin");
let showPassword = document.getElementById("showPassword");
let passwordInput = document.getElementById("passwordInput");

loginButton.addEventListener("click", function (e) {
  loginFormContainer.classList.add("show");
  loginForm.style.display = "flex";
  loginForm.classList.add("show");
});

closeLogin.addEventListener("click", function (e) {
  loginFormContainer.classList.remove("show");
  loginForm.classList.remove("show");
});

showPassword.addEventListener("click", function (e) {
  if (passwordInput.type == "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
});
