//

const userData = JSON.parse(localStorage.getItem("session"))
// DOM
let distSemanal = document.getElementById("distribucion1")


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


// Función para calcular el total de horas
function updateTotalHours() {
    var totalHoursCell = document.getElementById("total-horas");
    var rows = document.querySelectorAll("table tbody tr");
    var total = 0;
    for (var i = 0; i < rows.length; i++) {
        var hoursInput = rows[i].querySelector(".horas");
        if (hoursInput && hoursInput.value) {
            total += parseFloat(hoursInput.value);
        }
    }
    totalHoursCell.textContent = total;

    // Verificar si el total supera las 18 horas y aplicar el estilo rojo
    if (total > 18 ) {
        totalHoursCell.classList.remove("border", "bg-danger", "text-white");
        totalHoursCell.classList.add("border", "bg-danger", "text-white");
    } else {
        // Si no supera las 18 horas, asegúrate de quitar la clase de borde rojo
        totalHoursCell.classList.remove("border", "bg-danger", "text-white");
        totalHoursCell.classList.add("border", "bg-success", "text-white");
    }
}
// Calcular el total de horas al cargar la página
window.addEventListener("load", updateTotalHours);


// Mostrar el modal al cargar la página
window.onload = function () {
    if(localStorage.getItem('modal')){

    }else {
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';
    }
}



// Cerrar el modal
function closeModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'none';
    localStorage.setItem('modal',true);
}

// se explica sola
function eliminarHijos(elementoPadre) {
    while (elementoPadre.firstChild) {
        elementoPadre.removeChild(elementoPadre.firstChild);
    }
}


// funcion para buscar todas las sumas posibles de para llegar a el numero proporcionado
function sumasPosibles(numero) {
    let resultados = [];

    function encontrarSumas(actuales, objetivo) {
        if (objetivo === 0 && actuales.length > 0) {
            // Ordenar el array antes de agregarlo a los resultados
            resultados.push(actuales.slice().sort((a, b) => a - b));
            return;
        }

        if (objetivo < 0 || actuales.length === 5) {
            return;
        }

        for (let i = 1; i <= 3; i++) {
            encontrarSumas([...actuales, i], objetivo - i);
        }
    }

    encontrarSumas([], numero);

    // Eliminar duplicados
    resultados = resultados.filter(
        (valor, indice, array) => array.findIndex(arr => JSON.stringify(arr) === JSON.stringify(valor)) === indice
    );

    return resultados;
}

// la misma funcion pero para el primer campo de numero
function sumasPosiblesprimero(numero) {
    let resultados = [];

    function encontrarSumas(actuales, objetivo) {
        if (objetivo === 0 && actuales.length > 0) {
            // Ordenar el array antes de agregarlo a los resultados
            resultados.push(actuales.slice().sort((a, b) => a - b));
            return;
        }

        if (objetivo < 0 || actuales.length === 5) {
            return;
        }

        for (let i = 1; i <= 3; i++) {
            encontrarSumas([...actuales, i], objetivo - i);
        }
    }

    encontrarSumas([], numero);

    // Eliminar duplicados
    resultados = resultados.filter(
        (valor, indice, array) => array.findIndex(arr => JSON.stringify(arr) === JSON.stringify(valor)) === indice
    );

    distributionfirst(resultados);
}

//funcion para crear la distribucion semanal
function distributionfirst(data) {
    eliminarHijos(distSemanal)
    data.forEach((e) => {
        let newOpt = document.createElement("option") ;
        newOpt.value = e ;
        newOpt.innerText = e.join(' + ') ;
        distSemanal.appendChild(newOpt)
        }
    )
}

// Acción al aceptar los términos
function acceptTerms() {
    closeModal(); // Cierra el modal
}
document.getElementById('toggleSection').addEventListener('click', function () {
    var toggleableSection = document.querySelector('.toggleable-section');
    toggleableSection.classList.toggle('hidden');
});

document.getElementById('toggleObservaciones').addEventListener('click', function () {
    var toggleableObservaciones = document.querySelector('.toggleable-observaciones');
    toggleableObservaciones.classList.toggle('hidden');
});


// Event listener para el botón #toggleSection
document.getElementById('toggleSection').addEventListener('click', toggleSection);

// funcion que te lleva a el login si no tienes una session iniciado
function middleware() {
    if(!localStorage.getItem("session")){
        window.location.href = "/"
    }
}

// funcion para poner en los campos del usuario los datos de forma automatica
function populateData() {
    let docente = document.getElementById("docente");
    let departamento = document.getElementById("departamento");
    let especialidad = document.getElementById("especialidad")
    let curso = document.getElementById("curso")
    let datos = JSON.parse(localStorage.getItem("session"))
    docente.value = datos.user
    docente.setAttribute("disabled", "")
    departamento.value = datos.departamento.name
    departamento.setAttribute("disabled", "")
    especialidad.value = datos.especialidad.name
    especialidad.setAttribute("disabled", "")
    let preAño = new Date()
    let currentAño = preAño.getFullYear() % 100 ;
    let nextAño = currentAño + 1 ;
    curso.value = `${currentAño} / ${nextAño}`
    curso.setAttribute("disabled", "")
    console.log("datos cubierto")
}

// se explica por si mismo
function closeSession() {
    localStorage.removeItem("session");
    window.location.href = "/";
}


//funcion para buscar todos los modulos de una especialidad a la que pertenece un profesor
async function modules() {
    let id = JSON.parse(localStorage.getItem("session")).especialidad.id;
    let token = JSON.parse(localStorage.getItem("session")).token
    return fetch(`/api/v1/especialidad/modulos/${id}`, {
        method: 'GET',
        headers: {
            'Accept': '*/*',
            'Content-type': "application/json",
            'Authorization': `Bearer ${token}`
        },
    }).then( response => {
        if (response.ok) {
            return response.json();
        }
        throw new Error('fetch fallado');
    }).then(response => {
            // hacer cosas con los modulos
            console.log(response)
            return response.modulos ;
    })
}

let modulos ;

async function llamadaValoresFetch() {
    modulos = await modules();
    localStorage.setItem("modulos", modulos)
}

// funcion para añadir los eventos para que funcionen
async function añadirEventos() {
    await llamadaValoresFetch()
    document.getElementById("agregar-fila").addEventListener("click", function () {
        let table = document.querySelector("table tbody");
        // var newRow = table.insertRow(table.rows.length);
        let newTr = document.createElement("tr");
        newTr.classList.add("seleccion-nueva")
        let turno = document.createElement("td");
        turno.innerHTML = `
        <select class="turno form-select">
            <option value="M">M</option>
            <option value="T">T</option>
        </select>
        `;

        let cursotd = document.createElement("td");
        let curso = document.createElement("input")
        // aqui se puede añadir el contenido
        curso.classList.add("form-control")
        curso.classList.add("curso")
        cursotd.appendChild(curso)

        let modulotd = document.createElement("td");
        let modulo = document.createElement("select");
        // aqui se puede añadir el contenido
        modulos.map((e) => {
            if(!e.user_id){
                let newOpt = document.createElement("option");
                newOpt.value = e.id;
                newOpt.innerText = e.materia;
                modulo.appendChild(newOpt);
            }
        });
        modulo.addEventListener("input", (e) => {
            let selectedModule = modulos.find((element) => element.id == e.target.value);
            if (selectedModule) {
                curso.value = selectedModule.curso.nombre ;
                horasInput.value = selectedModule.horas_semanales;
                updateTotalHours();
                let newdist = sumasPosibles(selectedModule.horas_semanales)
                eliminarHijos(distribucion) ;
                newdist.forEach((e) => {
                    let newOpt = document.createElement("option") ;
                    newOpt.value = e ;
                    newOpt.innerText = e.join(' + ') ;
                    distribucion.appendChild(newOpt);
                })
                if(selectedModule.turno == "T") {
                    turno.innerHTML = `
                        <select class="turno form-select">
                            <option value="T">T</option>
                        </select>`;
                } else {
                    turno.innerHTML = `
                        <select class="turno form-select">
                            <option value="M">M</option>
                        </select>`;
                }

                // Eliminar opciones anteriores antes de agregar las nuevas
                eliminarHijos(aula);

                selectedModule.aula.forEach((el) => {
                    let newOpt = document.createElement("option");
                    newOpt.value = el.id;
                    newOpt.innerText = el.nombre;
                    aula.appendChild(newOpt);
                });
            }
        })
        modulo.classList.add("modulo");
        modulo.classList.add("form-select")
        let defaultModulo = document.createElement("option");
        defaultModulo.value=""
        defaultModulo.innerText = "Escoge un modulo";
        modulo.appendChild(defaultModulo);
        modulotd.appendChild(modulo)

        let distribuciontd = document.createElement("td");
        let distribucion = document.createElement("select");
        distribucion.classList.add("distribucion")
        distribucion.classList.add("form-select")
        distribuciontd.appendChild(distribucion)

        let aulatd = document.createElement("td");
        let aula = document.createElement("select");
        // aqui se puede añadir el contenido
        aula.classList.add("form-select")
        aula.classList.add("aula")
        aulatd.appendChild(aula);

        let horas = document.createElement("td");
        let horasInput = document.createElement("input");
        // aqui se puede añadir el contensido
        horasInput.setAttribute("type","number");
        horasInput.classList.add("form-control")
        horasInput.classList.add("horas")
        horasInput.setAttribute("disabled", "true")
        horasInput.addEventListener("input", function () {
            updateTotalHours()
            eliminarHijos(distribucion);
            let distValues = sumasPosibles(horasInput.value)
            console.log(distValues)
            distValues.forEach((e) => {
                        let newOpt = document.createElement("option") ;
                        newOpt.value = e.join(' + ');
                        newOpt.innerText = e.join(' + ') ;
                        distribucion.appendChild(newOpt)
                    }
                )
            }
    );
        horas.appendChild(horasInput)

        let deleteTd = document.createElement("td");
        let deleteButton = document.createElement("button");
        deleteButton.innerText = "X"
        deleteButton.classList.add("btn")
        deleteButton.classList.add("btn-danger")
        deleteButton.addEventListener("click", function () {
            this.parentElement.parentElement.remove();
            updateTotalHours();
        })

        deleteTd.appendChild(deleteButton);
        newTr.appendChild(turno);
        newTr.appendChild(cursotd);
        newTr.appendChild(modulotd);
        newTr.appendChild(horas);
        newTr.appendChild(distribuciontd);
        newTr.appendChild(aulatd);
        newTr.appendChild(deleteTd);
        table.appendChild(newTr);
    });
}


window.addEventListener("DOMContentLoaded", () => {
    console.log(localStorage.getItem("session"))
    middleware();
    populateData();
    añadirEventos();
    nameInNav()
    document.getElementById("cerrar_sesion").addEventListener("click", cerrarSesion);
})


window.onload = function() {
    if (!haVistoModal()) {
        mostrarModal();
    }
};

// Función para mostrar el modal
function mostrarModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'block';
}

// Función para cerrar el modal y marcar como visto en localStorage
function cerrarModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'none';
    marcarModalVisto();
}

// Funciones para gestionar el estado del modal en el almacenamiento local
function haVistoModal() {
    return localStorage.getItem('modalVisto') === 'true';
}

function marcarModalVisto() {
    localStorage.setItem('modalVisto', 'true');
}

function acceptTerms() {
    cerrarModal();
}

// funcion para actualizar los datos de un modulo a traves del formulario
async function fetchDatosFormulario(id, distribucion) {
    let updateValue = {
        distribucion: distribucion,
        user_id: userData.userID
    };

    let token = JSON.parse(localStorage.getItem("session")).token;

    try {
        const response = await fetch(`api/v1/modulos/${id}`, {
            method: "PATCH",
            headers: {
                'Content-type': "application/json",
                'Authorization': `Bearer ${token}`
            },
            body: JSON.stringify(updateValue)
        });

        if (response.ok) {
            console.log("actualizar ok");
            const responseData = await response.json();
            if (responseData.status === "success") {
                console.log("actualización completada");
            } else {
                throw new Error('La respuesta indica un error');
            }
        } else {
            throw new Error('La solicitud Fetch falló');
        }
    } catch (error) {
        console.error(error.message);
        // Manejar el error apropiadamente, puedes mostrar un mensaje al usuario o realizar otra acción.
    }
}

// funcion que recoge los datos que ha introducido el usuario
async function recogerDatos() {
    let selecciones = document.querySelectorAll(".seleccion-nueva")

    selecciones.forEach((e) => {
        let id = e.querySelector("td .modulo").value
        console.log(id)
        let distribucion = e.querySelector("td .distribucion")
        let aula = e.querySelector("td .aula");
        fetchDatosFormulario(id, distribucion.value, aula.value) ;
    })
}

document.getElementById("enviar_formulario").addEventListener("click", () => {
    recogerDatos();
})
