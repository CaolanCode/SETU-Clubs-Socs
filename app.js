const signUpButton = document.getElementById('sign-up')
const signInButton = document.getElementById('sign-in')
const logoutButton = document.getElementById('logout')

signUpButton.addEventListener('click', () => {
  window.location = './signup.php'
})
signInButton.addEventListener('click', () => {
  window.location = './index.php'
})
logoutButton.addEventListener('click', () => {
  window.location = './index.php'
})