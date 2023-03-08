const inputElements = document.querySelector('.input-elements')
const inputButtons = document.querySelector('.input-buttons')
const headerButtons = document.querySelector('.header-buttons')

// student ID, phone number, email, DOB, upload photo
// medical declaration, medical conditions, next-of-kin
const register = () => {
  // personal info label
  const personalInfoLabel = document.createElement('label')
  personalInfoLabel.innerText = 'Personal Information:'
  // student id
  const studentID = document.createElement('input')
  studentID.id = 'student-id'
  studentID.type = 'text'
  studentID.name = 'student-id'
  studentID.placeholder = 'Enter student ID'
  // phone number
  const phoneNumber = document.createElement('input')
  phoneNumber.id = 'phone-number'
  phoneNumber.type = 'tel'
  phoneNumber.name = 'phone-number'
  phoneNumber.placeholder = 'Enter phone number'
  // email
  const email = document.createElement('input')
  email.id = 'email'
  email.type = 'email'
  email.name = 'email'
  email.placeholder = 'Enter email'
  // date of birth
  const dob = document.createElement('input')
  dob.id = 'dob'
  dob.type = 'date'
  dob.name = 'dob'
  // medical information
  const medicalInfoLabel = document.createElement('label')
  medicalInfoLabel.innerText = 'Medical Information'

  inputElements.appendChild(personalInfoLabel)
  inputElements.appendChild(studentID)
  inputElements.appendChild(phoneNumber)
  inputElements.appendChild(email)
  inputElements.appendChild(dob)
  inputElements.appendChild(medicalInfoLabel)
}

const startPage = () => {
  // header buttons
  const logOutButton = document.createElement('button')
  logOutButton.id = 'log-out'
  logOutButton.innerText = 'Log-out'
  logOutButton.addEventListener('click', () => {
    window.location = './index.html'
  })
  headerButtons.appendChild(logOutButton)
  register()
}

window.onload = () => startPage()