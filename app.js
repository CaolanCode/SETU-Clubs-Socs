const inputElements = document.querySelector('.input-elements')
const inputButtons = document.querySelector('.input-buttons')

const clearContainer = (() => {
  inputElements.innerHTML = ''
  inputButtons.innerHTML = ''
})

const signIn = (() => {
  clearContainer()
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
  // buttons
  const submitButton = document.createElement('button')
  submitButton.type = 'submit'
  submitButton.id = 'submit-button'
  submitButton.innerText = 'Submit'
  const cancelButton = document.createElement('button')
  cancelButton.type = 'reset'
  cancelButton.id = 'cancel-button'
  cancelButton.innerText = 'Cancel'
  inputButtons.appendChild(submitButton)
  inputButtons.appendChild(cancelButton)
})

const register = (() => {
  clearContainer()
  // 
})


const registerButton = document.getElementById('register')
const signInButton = document.getElementById('sign-in')

signInButton.addEventListener('click', signIn)
registerButton.addEventListener('click', register)
window.onload = () => signIn()


