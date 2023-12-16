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

<body>


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


    <div class="container-fluid estudios">
        <div class="row">
            <!-- RECUADRO A LA IZQUIERDA CON "LISTA DE USUARIOS" E "INFO DE DEPARTAMENTOS" -->
            <div class="col-md-3 mb-4">
                <section class="mt-3 p-3" style="background-color: #f8d7da; border-radius: 8px;">
                    <h3 class="mb-3">Administrar</h3>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="mostrarUsuarios" data-bs-toggle="pill" href="#usuariosContent"
                            role="tab" aria-controls="usuariosContent" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            </svg>

                            Lista de Docentes

                        </a>
                        <a class="nav-link" id="mostrarDepartamentos" data-bs-toggle="pill" href="#departamentosContent"
                            role="tab" aria-controls="departamentosContent" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                            </svg>

                            Info de Departamentos
                        </a>
                    </div>
                </section>
            </div>





            <!-- Contenido a la derecha -->
            <div class="col-md-8 mb-4 d-flex  align-items-center">

                <!-- LISTA DE DOCENTES-->
                <div id="usuariosContent">
                    <h2>Administrar Docentes</h2>

                    <!--TABLA DOCENTES-->
                    <div class="table-responsive">
                        <h3>Lista de Docentes
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addUserModal">
                                Agregar Docente
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg>
                            </button>
                        </h3>

                        <table class="table table-bordered">

                            <!--LISTA DE DOCENTES-->
                            <thead>
                                <tr>
                                    <th>Nombre de Docente</th>
                                    <th>Correo Electrónico</th>
                                    <th>Especialidad</th>
                                    <th>Módulo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="users-tbody">
                                <!-- CONTENIDO DE USUARIO 1-->
                                {{-- <tr>
                                    <td id="enseña_user">Usuario1</td>
                                    <td id="enseña_email">usuario1@example.com</td>
                                    <td id="enseña_especialidad">INFORMATICA Y COMUNICACIONES</td>
                                    <td id="enseña_modulo">DESSARROLLO DE APLICACIONES WEB</td>
                                    <td>
                                        <button id="edita_user" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editUserModal">Editar
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-clipboard2-minus"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z" />
                                                <path
                                                    d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z" />
                                                <path d="M6 8a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                                            </svg>
                                        </button>
                                        <button id="elimina_user" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteUserModal">Eliminar
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- INFO DE DEPARTAMENTOS -->
                <div id="departamentosContent" style="display: none;" class="container departamento">
                    <div class="row">
                        <!-- CONTENIDO DE DEPARTAMENTOS -->
                        <div class="col-md-12 mb-4">
                            <h2 class="text-center">Información de Departamentos</h2>
                            <div class="mt-4" id="estudiosDepartamentoBody">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL DE CREACIÓN DEL DOCENTE-->

    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Agregar Docente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_user_form">
                        <div class="mb-3">
                            <!--DOCENTE-->
                            <label for="username" class="form-label">Nombre del Docente:</label>
                            <input type="text" class="form-control" id="add_name_user" name="name" required>
                        </div>
                        <div class="mb-3">
                            <!--EMAIL-->
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="add_email_user" name="mail" required>
                        </div>
                        <div class="mb-3">
                            <!--contraseña ASOCIADO/A-->
                            <label for="specialty" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="add_password_user" name="password"
                                required>
                        </div>
                        <div class="mb-3">
                            <!--contraseña ASOCIADO/A-->
                            <label for="specialty" class="form-label">Confirmar Contraseña:</label>
                            <input type="password" class="form-control" id="add_password_confirmation_user"
                                name="password_confirmation" required>
                        </div>
                        <div class="mb-3">
                            <!--ESPECIALIDAD ASOCIADO/A-->
                            <label for="specialty" class="form-label">Tipo:</label>
                            <select class="form-control" id="add_type_user" name="type" required>
                                <option value="departamento">Jefe de Departamento</option>
                                <option value="none">Docente</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <!--ESPECIALIDAD ASOCIADO/A-->
                            <label for="specialty" class="form-label">Especialidad:</label>
                            <select class="form-control" id="add_specialty_user" name="especialidad"
                                required></select>
                        </div>
                        <div class="mb-3">
                            <!--DEPARTAMENTEO ASOCIADO/A-->
                            <label for="departamento" class="form-label">Departamento:</label>
                            <select class="form-control" id="add_departamento_user" name="departamento"
                                required></select>
                        </div>
                        <!--AGREGAR DOCENTE-->
                        <input type="submit" class="btn btn-primary" id="add_user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-add" viewBox="0 0 16 16">
                            <path
                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                            <path
                                d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                        </svg>
                        </input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DE EDICIÓN DEL DOCENTE-->

    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Editar Docente "NOMBRE DEL DOCENTE"</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit_user_form">
                        <div class="mb-3">
                            <!--DOCENTE-->
                            <label for="username" class="form-label">Nombre del Docente:</label>
                            <input type="text" class="form-control" id="edit_username_user" required>
                        </div>
                        <div class="mb-3">
                            <!--EMAIL-->
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="edit_email_user" required>
                        </div>
                        <div class="mb-3">
                            <!--ESPECIALIDAD ASOCIADO/A-->
                            <label for="specialty" class="form-label">Especialidad:</label>
                            <select class="form-control" id="edit_specialty_user" required></select>
                        </div>
                        <div class="mb-3">
                            <!--DEPARTAMENTEO ASOCIADO/A-->
                            <label for="departamento" class="form-label">Departamento:</label>
                            <select class="form-control" id="edit_departamento_user" required></select>
                        </div>
                        <!--AGREGAR DOCENTE-->
                        <input type="submit" id="confirm_edit_user" class="btn btn-primary">Confirmar
                        Edición</input>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL CONFIRMAR ELIMINAR DOCENTE-->

    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">SEGURO QUE QUIERE ELIMINAR AL DOCENTE "NOMBRE DEL
                        DOCENTE"</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit_user_form2">

                        <!--ELIMINAR DOCENTE-->
                        <button type="button" id="confirm_delete_user"class="btn btn-danger">Confirmar

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                <path
                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                            </svg>

                        </button>
                    </form>
                </div>
            </div>
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

    <script src="scripts/estudio.js"></script>

    <script>
        // Script para mostrar/ocultar tablas al hacer clic en los botones
        document.getElementById('mostrarUsuarios').addEventListener('click', function() {
            document.getElementById('usuariosContent').style.display = 'block';
            document.getElementById('departamentosContent').style.display = 'none';
        });

        document.getElementById('mostrarDepartamentos').addEventListener('click', function() {
            document.getElementById('usuariosContent').style.display = 'none';
            document.getElementById('departamentosContent').style.display = 'block';
        });
    </script>
</body>

</html>
