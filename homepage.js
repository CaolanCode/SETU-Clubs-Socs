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
  // picture file
  const selfieFileContainer = document.createElement('div')
  selfieFileContainer.style.display = 'flex'
  const selfieFileLabel = document.createElement('label')
  selfieFileLabel.innerText = 'Upload photo:'
  selfieFileLabel.style.fontSize = '.8rem'
  const selfieFile = document.createElement('input')
  selfieFile.type = 'file'
  selfieFileContainer.appendChild(selfieFileLabel)
  selfieFileContainer.appendChild(selfieFile)
  // medical information
  // medical conditions
  const medicalCondition = document.createElement('input')
  medicalCondition.placeholder = 'Enter medical conditions'
  medicalCondition.id = 'medical-condition'
  medicalCondition.type = 'text'
  // doctors name
  const doctorName = document.createElement('input')
  doctorName.placeholder = 'Enter Doctor\'s name'
  doctorName.id = 'doctor-name'
  doctorName.type = 'text'
  // doctors name
  const doctorNumber = document.createElement('input')
  doctorNumber.placeholder = 'Enter Doctor\'s name'
  doctorNumber.id = 'doctor-number'
  doctorNumber.type = 'tel'
  // next of kin
  const medicalInfoLabel = document.createElement('label')
  medicalInfoLabel.innerText = 'Medical Information:'
  const nokName = document.createElement('input')
  nokName.id = 'nok-name'
  nokName.type = 'text'
  nokName.name = 'nok-name'
  nokName.placeholder = 'Enter Next of Kin name'
  const nokNumber = document.createElement('input')
  nokNumber.id = 'nok-number'
  nokNumber.type = 'tel'
  nokNumber.placeholder = 'Enter Next of Kin number'
  // medical declaration
  const medicalDecContainer = document.createElement('div')
  medicalDecContainer.style.display = 'flex'
  const medicalDecLabel = document.createElement('label')
  medicalDecLabel.innerText = 'I declare that I am medically fit to partake in club/society activities:'
  medicalDecLabel.style.fontSize = '.8rem'
  const medicalDecBox = document.createElement('input')
  medicalDecBox.type = 'checkbox'
  medicalDecBox.id = 'medical-dec-chbx'
  medicalDecBox.style.cursor = 'pointer'
  medicalDecContainer.appendChild(medicalDecLabel)
  medicalDecContainer.appendChild(medicalDecBox)

  inputElements.appendChild(personalInfoLabel)
  inputElements.appendChild(studentID)
  inputElements.appendChild(phoneNumber)
  inputElements.appendChild(email)
  inputElements.appendChild(dob)
  inputElements.appendChild(selfieFileContainer)
  inputElements.appendChild(medicalInfoLabel)
  inputElements.appendChild(medicalCondition)
  inputElements.appendChild(doctorName)
  inputElements.appendChild(doctorNumber)
  inputElements.appendChild(nokName)
  inputElements.appendChild(nokNumber)
  inputElements.appendChild(medicalDecContainer)

  // buttons
  const submitButton = document.createElement('button')
  submitButton.type = 'submit'
  submitButton.id = 'submit-register-btn'
  submitButton.innerText = 'Submit'
  submitButton.addEventListener('click', () => {
  })
  const cancelButton = document.createElement('button')
  cancelButton.type = 'reset'
  cancelButton.id = 'cancel-register-btn'
  cancelButton.innerText = 'Cancel'
  inputButtons.appendChild(submitButton)
  inputButtons.appendChild(cancelButton)
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