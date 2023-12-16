<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Majada Marcial</title>
</head>

<body class="formulario">

    <header>

        <!--------------------------------------------------------------------------->

        <!-- NAVEGADOR GLOBAL  -->

        <!-------------------------------------------------------------------------->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="navbar-brand" href="main.html">
                    <img src="../images/logo.png" alt="Majada Marcial Logo" id="imglogo1" class="img-fluid mb-3">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">

                    <!--HEADER TEXTO MENU TAMAÑO PEQUEÑO-->
                    <div class="offcanvas-header">

                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>

                    </div>

                    <!--BODY TEXTO MENU TAMAÑO PEQUEÑO-->

                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/main">Inicio</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Estudios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Departamento</a>
                            </li> -->
                        </ul>

                        <!--USUARIO INICIO SESION Y MENU DESPLEGABLE CERRAR SESIÓN-->
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link user-name nav-link dropdown-toggle" id="user_name" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nombre de Usuario
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" id="cerrar_sesion" href="#">Cerrar sesión

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                                <path
                                                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                                            </svg></a></li>

                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="terms">
                <h2>Anotaciones Obligatorias</h2>
                <ul>
                    <li>1. El profesorado tutor debe impartir al menos un módulo del curso que tutoriza.</li>
                    <li>2. La carga lectiva por trimestre no debe superar las 23 horas.</li>
                    <li>3. No se debe superar las 24 horas de permanencia semanal.</li>
                    <li>4. El aula o taller será fijado por el departamento y no podrá modificarse posteriormente.</li>
                    <li>5. No se debe concertar el horario en una modalidad o grupo.</li>
                </ul>
            </div>
            <button class="accept-btn btn btn-success" onclick="acceptTerms()">Aceptar</button>
        </div>
    </div>

    <div class="container-index">

        <button id="toggleSection" class="desplegable"> <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="bi bi-arrows-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2M8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10" />
            </svg></button>

        <div class="section1 toggleable-section">

            <form>
                <div class="form-group">
                    <label for="departamento" class="font-weight-bold  dark-text">Departamento:</label>
                    <input type="text" id="departamento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="docente" class="font-weight-bold">Docente:</label>
                    <input type="text" id="docente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="especialidad" class="font-weight-bold">Especialidad:</label>
                    <input type="text" id="especialidad" class="form-control">
                </div>
                <div class="form-group">
                    <label for="curso" class="font-weight-bold">Curso:</label>
                    <input type="text" id="curso" class="form-control" value="23/24" readonly>
                </div>
            </form>
        </div>

        <div class="section">

            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <!-- Botón "Agregar Fila" -->
                                <button id="agregar-fila" class="btn btn-primary">Agregar Fila
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th class="turno">Turno (M/T)</th>
                            <th>Curso</th>
                            <th>Módulo</th>
                            <th>Horas</th>
                            <th>Distribución Semanal</th>
                            <th>Aula o Taller</th>
                            <th>Eliminar</th>
                        </tr>
                        <!-- Primera fila preexistente -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td id="total-horas" class="form-control">0</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>


        <button id="toggleObservaciones" class="desplegable"><svg xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2M8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10" />
            </svg></button>

        <div class="section3 toggleable-observaciones">

            <div class="form-group">
                <label for="observaciones">Observaciones (Opcional):</label>
                <textarea id="observaciones" class="form-control"></textarea>
            </div>

            <div class="anotaciones">
                <h2>Recuerde:</h2>
                <ul>
                    <li>1. El profesorado tutor debe impartir al menos un módulo del curso que tutoriza.</li>
                    <li>2. La carga lectiva por trimestre no debe superar las 23 horas.</li>
                    <li>3. No se debe superar las 24 horas de permanencia semanal.</li>
                    <li>4. El aula o taller será fijado por el departamento y no podrá modificarse posteriormente.</li>
                    <li>5. No se debe concertar el horario en una modalidad o grupo.</li>
                </ul>
            </div>
        </div>

        <div class="mt-4">
            <button class="btn btn-success" id="enviar_formulario">Enviar Ficha <svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-send-check" viewBox="0 0 16 16">
                    <path
                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363 1.591 6.602l11.833-4.733Z" />
                    <path
                        d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                </svg></button>
            <a href="/main"><button class="btn btn-secondary">Volver <svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                        <path
                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                    </svg></button></a>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <!-- Primera sección del footer -->
                <div class="col-md-6">
                    <hr>
                    <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><span
                            property="dct:title">Proyect-Coffe</span> by <span property="cc:attributionName">Yeray
                            Santana Curbelo
                            And Iván Da Silva</span> is licensed under </p>
                    <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank"
                        rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC-ND 4.0<img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img
                            style="height:22px!important;margin-left:3px;vertical-align:text-bottom;"
                            src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"></a>
                </div>

                <!-- Segunda sección del footer -->
                <div class="col-md-6">
                    <hr>
                    <a href="https://www.w3.org/TR/WCAG20/">Accesibily</a>
                </div>
            </div>

            <!-- Iconos y enlaces a redes sociales -->
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <a href="https://github.com/Battlesoft/proyecto-cafe"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-github"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                        </svg></a>
                    <a href="https://www.youtube.com/@cifpmajadamarcial9259" target="_blank" class="social-icon"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="../scripts/indexscript.js"></script>

    <script>
        let distSemanal = document.getElementById("distribucion1")

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
            if (total > 18) {
                totalHoursCell.classList.remove("border", "bg-danger", "text-white");
                totalHoursCell.classList.add("border", "bg-danger", "text-white");
            } else {
                // Si no supera las 18 horas, asegúrate de quitar la clase de borde rojo
                totalHoursCell.classList.remove("border", "bg-danger", "text-white");
                totalHoursCell.classList.add("border", "bg-success", "text-white");
            }
        }


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
                (valor, indice, array) => array.findIndex(arr => JSON.stringify(arr) === JSON.stringify(valor)) ===
                indice
            );

            distributionfirst(resultados);
        }

        function distributionfirst(data) {
            eliminarHijos(distSemanal)
            data.forEach((e) => {
                let newOpt = document.createElement("option");
                newOpt.value = e;
                newOpt.innerText = e.join(' + ');
                distSemanal.appendChild(newOpt)
            })
        }

        function eliminarHijos(elementoPadre) {
            while (elementoPadre.firstChild) {
                elementoPadre.removeChild(elementoPadre.firstChild);
            }
        }
    </script>
</body>

</html>
