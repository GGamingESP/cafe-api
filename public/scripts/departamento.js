let departamentoName = document.getElementById("departamento_name");
let departamentoBody = document.getElementById("departamento_body");

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

async function fetchDepartamento() {
    departamentoName.innerText = userData.departamento.name
    let token = JSON.parse(localStorage.getItem("session")).token
    return fetch(`/api/v1/departamento/usuarios/${userData.departamento.id}`, {
        method: 'GET',
        headers: {
            'Accept': '*/*',
            'Content-type': "application/json",
            'Authorization': `Bearer ${token}`
        },
    }).then((response) => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('departamento fallado');
    }).then((response) => {
        if(response.status = "success"){
            return response.usuarios ;
        }
    })
}

let departamentoDatos ;

async function generarDatosDepartamento() {
    departamentoDatos = await fetchDepartamento();
    console.log(departamentoDatos);
    departamentoDatos.map((e) => {
        let newtr = document.createElement("tr");
        let newtd1 = document.createElement("td")
        newtd1.innerText = e.name ;
        let newtd2 = document.createElement("td")
        newtd2.innerText = e.email
        let newtd3 = document.createElement("td");
        let total = 0 ;
        e.modulos.map((element) => {
            total =+ element.h_semanales
        })
        newtd3.innerText = total ;
        newtr.appendChild(newtd1);
        newtr.appendChild(newtd2);
        newtr.appendChild(newtd3);
        departamentoBody.appendChild(newtr)
    })
}

const userData = JSON.parse(localStorage.getItem("session"))

// funcion para saber si estas logeado
function middleware() {
    if(localStorage.getItem("session")){
        // userData.type != "departamento" ? window.location.href = "/" : "";
    }else {
        window.location.href = "/"
    }
}

window.addEventListener("DOMContentLoaded", () => {
    nameInNav();
    document.getElementById("cerrar_sesion").addEventListener("click", cerrarSesion);
    generarDatosDepartamento();
    middleware();
})
