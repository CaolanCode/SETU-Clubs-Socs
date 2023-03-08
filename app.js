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
  submitButton.id = 'submit-sign-in-btn'
  submitButton.innerText = 'Submit'
  const cancelButton = document.createElement('button')
  cancelButton.type = 'reset'
  cancelButton.id = 'cancel-sign-in-btn'
  cancelButton.innerText = 'Cancel'
  inputButtons.appendChild(submitButton)
  inputButtons.appendChild(cancelButton)
})

const createAccount = (() => {
  clearContainer()
  // student id
  const username = document.createElement('input')
  username.placeholder = 'Enter a Username'
  username.type = 'text'
  username.name = 'username'
  username.id = 'username-new'
  // password
  const password = document.createElement('input')
  password.placeholder = 'Password'
  password.name = 'password'
  password.type = 'password'
  password.id = 'password-new'
  // confirm password
  const confirmPassword = document.createElement('input')
  confirmPassword.placeholder = 'Confirm Password'
  confirmPassword.name = 'password'
  confirmPassword.type = 'password'
  confirmPassword.id = 'confirm-password'
  inputElements.appendChild(username)
  inputElements.appendChild(password)
  inputElements.appendChild(confirmPassword)
  // buttons
  const submitButton = document.createElement('button')
  submitButton.type = 'submit'
  submitButton.id = 'submit-sign-up-btn'
  submitButton.innerText = 'Submit'
  const cancelButton = document.createElement('button')
  cancelButton.type = 'reset'
  cancelButton.id = 'cancel-sign-up-btn'
  cancelButton.innerText = 'Cancel'
  inputButtons.appendChild(submitButton)
  inputButtons.appendChild(cancelButton)
})


const registerButton = document.getElementById('sign-up')
const signInButton = document.getElementById('sign-in')

signInButton.addEventListener('click', signIn)
registerButton.addEventListener('click', createAccount)
window.onload = () => signIn()


