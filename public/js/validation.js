const email= document.getElementById('email')
const password= document.getElementById('password')
const form= document.getElementById('form')
const errorElement= document.getElementById('error')

form.addEventListener('submit' , (e) =>  {
    let messeges = []

    if(email.value === ''|| email.value == null){
        messeges.push('Email is required')
    }

    if(password.value.length <= 4){
        messeges.push('Password must be longer than 4 characters')
    }
    if(messeges.length>0){
        e.preventDefault()
        errorElement.innerText=messeges.join(',')
    }
    
})