let loginForm = document.getElementById("login-form")
let email = document.getElementById("mail");
let password = document.getElementById("password")


loginForm.addEventListener("submit", (event) => {
    event.preventDefault();
    let formDatos = {
        email : email.value,
        password: password.value
    }
    // const datos = new FormData(loginForm);
    // console.log(datos);
    fetch("http://cafe-api.test/api/login",{
        method: 'POST',
        headers: {
            'Accept': '*/*',
            'Content-type': "application/json"
        },
        body: JSON.stringify(formDatos)
    }).then(response => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('Login fallado');
    }).then(response => {
        if(response.status = "success"){
            let sessionData = {
                token : response.data.token,
                userID: response.data.user.id,
                user: response.data.user.name,
                mail: response.data.user.email
            }
            console.log(sessionData);
            localStorage.setItem('session', JSON.stringify(sessionData));
            window.location.href = "/pages/formulario.html"
        }
    }).catch(error => {
        console.log(error)
    })
})

window.addEventListener("DOMContentLoaded", () => {
    if(localStorage.getItem('session')){
        window.location.href = "/pages/formulario.html"
    }
})
