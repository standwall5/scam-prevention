let loginButton = document.getElementById("login");
let signupButton = document.getElementById("signup");
let loginFormContainer = document.getElementById("loginFormContainer");
let loginForm = document.getElementById("loginForm");
let closeLogin = document.getElementById("closeLogin");

let signupForm = document.getElementById("signupForm");
let closeSignup = document.getElementById("closeSignup");

let showPassword = document.querySelectorAll(".showPassword");
let passwordInput = document.querySelectorAll(".passwordInput");

loginButton.addEventListener("click", function (e) {
  let signupDisplayValue = window.getComputedStyle(signupForm).display;

  if (
    loginFormContainer.classList.contains("show") &&
    signupDisplayValue === "flex"
  ) {
    signupForm.classList.remove("show");
    signupForm.style.display = "none";
    loginFormContainer.classList.add("show");
    loginForm.style.display = "flex";

    setTimeout(() => {
      loginForm.classList.add("show");
    }, 50);
  } else {
    loginFormContainer.classList.add("show");
    loginForm.style.display = "flex";

    setTimeout(() => {
      loginForm.classList.add("show");
    }, 50);
  }
});

closeLogin.addEventListener("click", function (e) {
  loginFormContainer.classList.remove("show");
  loginForm.classList.remove("show");
  setTimeout(() => {
    loginForm.style.display = "none";
  }, 250);
});

signupButton.addEventListener("click", function (e) {
  let loginDisplayValue = window.getComputedStyle(loginForm).display;

  if (
    loginFormContainer.classList.contains("show") &&
    loginDisplayValue === "flex"
  ) {
    loginForm.classList.remove("show");

    loginForm.style.display = "none";
    loginFormContainer.classList.add("show");
    signupForm.style.display = "flex";
    setTimeout(() => {
      signupForm.classList.add("show");
    }, 50);
  } else {
    loginFormContainer.classList.add("show");
    signupForm.style.display = "flex";
    setTimeout(() => {
      signupForm.classList.add("show");
    }, 50);
  }
});

closeSignup.addEventListener("click", function (e) {
  loginFormContainer.classList.remove("show");
  signupForm.classList.remove("show");
  setTimeout(() => {
    signupForm.style.display = "none";
  }, 300);
});

showPassword.forEach((toggle, index) => {
  // toggle = showPassword
  toggle.addEventListener("click", function () {
    let input = passwordInput[index];
    if (input == passwordInput[1]) {
      if (input.type === "password") {
        input.type = "text";
        passwordInput[2].type = "text";
      } else {
        input.type = "password";
        passwordInput[2].type = "password";
      }
    } else {
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    }
  });
});

// showPassword.addEventListener("click", function (e) {
//   if (passwordInput.type == "password") {
//     passwordInput.type = "text";
//   } else {
//     passwordInput.type = "password";
//   }
// });
