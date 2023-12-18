
// Funcion para cambiar el nombre del usuario en el nav y crear los links a diferentes
function nameInNav() {
    let data = JSON.parse(localStorage.getItem("session"))
    console.log(data)
    let userButton = document.getElementById("user_name")
    userButton.innerText = data.user;
    let navbar = document.querySelector(".navbar-nav");
    if(data.tipo == "departamento"){
        let newLink = document.createElement("li");
        newLink.innerHTML = `<a class="nav-link" href="/departamento">Jefe de Departamento</a>`
        navbar.appendChild(newLink);
    }else if(data.tipo == "estudios"){
        let newLink = document.createElement("li");
        newLink.innerHTML = `<a class="nav-link" href="/estudios">Jefe de Estudios</a>`
        navbar.appendChild(newLink);
    }
}

function cerrarSesion() {
    localStorage.removeItem("session")
    window.location.href = "/"
}

// funcion para saber si un usuario se ha logueado
function middleware() {
    if(!localStorage.getItem("session")){
        window.location.href = "/"
        console.log("hola login")
    }
}

window.addEventListener("DOMContentLoaded", () => {
    middleware();
    nameInNav();
    document.getElementById("cerrar_sesion").addEventListener("click", cerrarSesion);

})
