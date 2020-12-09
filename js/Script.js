const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const Register = document.getElementById('Register');

signUpButton.addEventListener('click', () => {
	Register.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	Register.classList.remove("right-panel-active");
});