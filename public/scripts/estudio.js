//
let departamentos = document.getElementById("estudiosDepartamentoBody")
let newUserForm = document.getElementById("add_user_form");
let usersTable = document.getElementById("users-tbody");

let nameForm = document.getElementById('add_name_user')
let emailForm = document.getElementById('add_email_user')
let specialtyForm = document.getElementById('add_specialty_user')
let departmentForm = document.getElementById('add_departamento_user')
let passwordForm = document.getElementById("add_password_user")
let passwordConfirmationForm = document.getElementById("add_password_confirmation_user")
let typeForm = document.getElementById("add_type_user");

// funcion para poner el nombre del usuario en el navbar y poner los links a las paginas
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

let departamentoData ;

async function fetchDepartamentos() {
    let token = JSON.parse(localStorage.getItem("session")).token
    return fetch(`/api/v1/departamento`, {
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
            return response.departamentos ;
        }
    })
}

async function generarDepartamentos() {
    try {
        departamentoData = await fetchDepartamentos();
        departamentoData.forEach((departamento) => {
            let newDepartamentoName = document.createElement('h3');
            newDepartamentoName.textContent = departamento.nombre;
            newDepartamentoName.classList.add('mt-4');
            newDepartamentoName.classList.add('text-center');

            let newTable = document.createElement('table');
            newTable.classList.add('table');
            newTable.classList.add('table-bordered');

            let newTableHead = document.createElement('thead');
            newTableHead.innerHTML = `
                <tr>
                    <th>Nombre del Docente</th>
                    <th>Correo Electrónico</th>
                </tr>`;

            let newTableBody = document.createElement('tbody');
            departamento.usuarios.forEach((usuario) => {
                let newTr = document.createElement('tr');
                newTr.innerHTML = `
                    <td>${usuario.name}</td>
                    <td>${usuario.email}</td>
                `;
                newTableBody.appendChild(newTr);
            });

            newTable.appendChild(newTableHead);
            newTable.appendChild(newTableBody);

            departamentos.appendChild(newDepartamentoName);
            departamentos.appendChild(newTable);

            let newFormOption = document.createElement("option");
            newFormOption.value = departamento.id
            newFormOption.innerText = departamento.nombre
            departmentForm.appendChild(newFormOption);
        });
    } catch (error) {
        console.error('Error al generar departamentos:', error);
        // Manejo de errores aquí
    }
}

async function deleteUsers(id) {
    let token = JSON.parse(localStorage.getItem("session")).token
    await fetch(`/api/v1/usuarios/${id}`, {
        method: 'DELETE',
        headers: {
            'Accept': '*/*',
            'Content-type': "application/json",
            'Authorization': `Bearer ${token}`
        },
    }).catch(error => console.log(error))
    location.reload();
}

let userDatos ;

async function fetchUsuarios() {
    let token = JSON.parse(localStorage.getItem("session")).token
    return fetch(`/api/v1/usuarios`, {
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
        throw new Error('usuarios fallado');
    }).then((response) => {
        if(response.status = "success"){
            return response.data ;
        }
    })
}

async function generarUsuarios() {
    userDatos = await fetchUsuarios()
    userDatos.map((e) => {
        let newtr = document.createElement("tr");
        let newtd1 = document.createElement("td");
        newtd1.innerText = e.name
        let newtd2 = document.createElement("td");
        newtd2.innerText = e.email ;
        let newtd3 = document.createElement("td")
        newtd3.innerText = e.especialidad.nombre
        let newtd4 = document.createElement("td")
        let modData = [];
        e.modulos.map((element) => {
            modData.push(element.materia)
        })
        newtd4.innerText = modData.join(" / ") ;
        let newtd5 = document.createElement("td");
        let delButton = document.createElement("button")
        delButton.innerHTML = ` Eliminar
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path
                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
            <path
                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
        </svg>
        `
        delButton.classList.add("btn")
        delButton.classList.add("btn-danger")
        delButton.addEventListener("click", function() {
            deleteUsers(e.id)
            this.parentElement.parentElement.remove();
        })
        newtd5.appendChild(delButton);
        newtr.appendChild(newtd1);
        newtr.appendChild(newtd2);
        newtr.appendChild(newtd3);
        newtr.appendChild(newtd4);
        newtr.appendChild(newtd4);
        newtr.appendChild(newtd5)
        usersTable.appendChild(newtr);
    })
}

// async function generarForm() {
//     let formData = await fetchDepartamentos();
// }

async function fetchEspecialidades() {
    let token = JSON.parse(localStorage.getItem("session")).token
    return fetch(`/api/v1/especialidad`, {
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
            return response.especialidad ;
        }
    })
}

let especialidadDatos ;

async function generarEspecialidades() {
    especialidadDatos = await fetchEspecialidades();
    especialidadDatos.map((e) => {
        let newOpt = document.createElement("option");
        newOpt.value = e.id
        newOpt.innerText = e.nombre
        specialtyForm.appendChild(newOpt);
        console.log("esp")
    })
}

function middleware() {
    if(!localStorage.getItem("session")){
        window.location.href = "/"
    }
}

newUserForm.addEventListener("submit", (e) => {
    console.log("intento registro")
    e.preventDefault(); // Evitar el envío por defecto del formulario

    // Aquí puedes realizar validaciones si es necesario

    // Crear un objeto con los datos del nuevo usuario
    let newUser = {
        name: nameForm.value,
        email: emailForm.value,
        password: passwordForm.value,
        password_confirmation: passwordConfirmationForm.value,
        type: typeForm.value,
        especialidad: specialtyForm.value,
        departamento: departmentForm.value
    };


    // const datos = new FormData(loginForm);
    // console.log(datos);
    fetch("/api/register",{
        method: 'POST',
        headers: {
            'Accept': '*/*',
            'Content-type': "application/json"
        },
        body: JSON.stringify(newUser)
    }).then((response) => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('usuarios fallado');
    }).then((response) => {
        if(response.status = "success"){
            console.log(response)
            let newSuccess = document.createElement("div")
            newSuccess.innerHTML = '<h3 class="text-center">Usuario registrado correctamente</h3>'
            newSuccess.classList.add("bg-success")
            newSuccess.classList.add("rounded")
            newSuccess.classList.add("mt-3")
            newUserForm.appendChild(newSuccess)
            setTimeout(() => {newSuccess.remove() ; location.reload()},"1500")
        }else {
            let newFail = document.createElement("div")
            newFail.innerHTML = '<h3 class="text-center">El Usuario no se ha podido registrar correctamente</h3>'
            newFail.classList.add("bg-success")
            newFail.classList.add("rounded")
            newFail.classList.add("mt-3")
            newUserForm.appendChild(newSuccess)
            setTimeout(() => {newFail.remove() ; location.reload()},"1500")
        }
    })

    // Aquí puedes realizar acciones como enviar los datos a un servidor, almacenar en una base de datos, etc.
    // Por ejemplo, imprimir los datos en la consola por ahora:
    console.log('Nuevo usuario:', newUser);

    // Limpiar el formulario después de procesar los datos (opcional)
    addUserForm.reset();
})

window.addEventListener("DOMContentLoaded", () => {
    middleware();
    nameInNav();
    document.getElementById("cerrar_sesion").addEventListener("click", cerrarSesion);
    generarDepartamentos();
    generarUsuarios();
    generarEspecialidades();

});
