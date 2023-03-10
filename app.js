const signUpButton = document.getElementById('sign-up')
const signInButton = document.getElementById('sign-in')

signUpButton.addEventListener('click', () => {
  window.location = './signup.php'
})
signInButton.addEventListener('click', () => {
  window.location = './index.php'
})