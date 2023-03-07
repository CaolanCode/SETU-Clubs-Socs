const inputElements = document.querySelector('.input-elements')


const signIn = (() => {
  // username
  const usernameInput = document.createElement('input')
  usernameInput.placeholder = 'Username'
  usernameInput.type = 'text'
  usernameInput.name = 'username'
  usernameInput.id = 'username-input'
  // password
  const passwordInput = document.createElement('input')
  passwordInput.placeholder = 'Password'
  passwordInput.name = 'password'
  passwordInput.type = 'password'
  passwordInput.id = 'pwd-input'
  inputElements.appendChild(usernameInput)
  inputElements.appendChild(passwordInput)
})()

const register = (() => {
  // 
})


const registerButton = document.getElementById('register')
const signInButton = document.getElementById('sign-in')

signInButton.addEventListener('click', () => {
  signIn
})


