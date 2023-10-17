const signUpForm = document.getElementById("signup-form-container");
const signInForm = document.getElementById("login-form-container");

document.getElementById("log_out-btn").style.display = "none";
signUpForm.style.display = "none";

// !FIXME: change form function
const openSignUp = document.getElementById("open-sign-up-btn");
const openSignIn = document.getElementById("open-sign-in-btn");

openSignUp.onclick = () => {
  signInForm.style.display = "none";
  signUpForm.style.display = "block";
};

openSignIn.onclick = () => {
  signUpForm.style.display = "none";
  signInForm.style.display = "block";
};
