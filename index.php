<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Centro de capacitacion SCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" href="assets/css/fontawesome/css/all.min.css">  
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include ('./inc/nav.php'); ?>
        <main id="page-top">
            <div class="slide-container">
                <div class="slide_section">
                    <img src="assets/img/slide/industrial.jpg" alt="Imagen de industrial">
                    <div class="slide-desc" id="slider1">
                        <p>Bienvenidos al </p>
                        <h1>Centro de Capacitación SCF</h1>
                        <p>Ofrecemos Cursos en Seguridad Industrial</p>
                    </div>
                </div>
                <div class="slide_section">
                    <img src="assets/img/slide/altura.jpeg"  alt="Imagen de trabajos en alturas">
                    <div class="slide-desc" id="slider1">
                        <!-- <h2>Seguridad para Trabajos en Alturas</h2> -->
                        <p>Ofrecemos Curso de Capacitación en Seguridad Trabajos en Alturas</p>
                        <a class="btn btn-primary" href="#portafolio">Ver más</a>
                    </div>
                </div>
                <div class="slide_section">
                    <img src="assets/img/slide/inst-elect.jpg" alt="Imagen de trabajo instalaciones electricas">
                    <div class="slide-desc" id="slider1">
                        <!-- <h2>Seguridad en Instalaciones Eléctrica</h2> -->
                        <p>Ofrecemos Curso de Capacitación en Seguridad de Instalaciones Eléctricas</p>
                        <a class="btn btn-primary" href="#portafolio">Ver más</a>
                    </div>

                </div>     
            </div>
             <div class="button_container">
                <div id="btn_slid1" class="button_slide active"></div>
                <div id="btn_slid2" class="button_slide"></div>
                <div id="btn_slid3" class="button_slide"></div>
            </div> 
           
        </main>

        <section id="objetivos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading titleobj">¿Porqué capacitarte con nosotros?</h2>
                    <h3 class="text-muted section-subheading">Nuestro objetivo es impulsar el desarrollo del público en
                        general, mediante la capacitación en seguridad industrial, incrementando el desarrollo profesional
                        y las oportunidades de trabajo<br></h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="material-icons fa-stack-1x fas fa-user-shield"></i>
                        </span>
                        <h4 class="section-heading">Seguridad</h4>
                        <p class="text-muted">Adquiere competencia en los trabajos con mayor demanda en el sector laboral<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="material-icons fa-stack-1x fas fa-chart-line"></i>
                        </span>
                        <h4 class="section-heading">Desarrollo profesional</h4>
                        <p class="text-muted">Ofrecemos capacitaciones que te ayudarán a impulsar tu desarrollo
                            profesional<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="material-icons fa-stack-1x fas fa-dollar-sign"></i>
                        </span>
                        <h4 class="section-heading d3">Precio</h4>
                        <p class="text-muted">Capacitación con precios flexibles</p>
                        
                    </div>
                </div>
            </div>
            
        </section>

        <section id="portafolio">
            <div class="container">
                <div class="row coursers">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase section-heading">Cursos</h2>
                        <p class="section-subheading text-muted textcourse">Ofrecemos capacitación en los siguientes temas:
                        </p>
                    </div>
                </div>
                <div class="row coursers">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Seguridad para trabajos en alturas</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course1.jpg">
                            <p class="card-text"><em>Basado en la NOM-009-STPS</em></p> 
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course1">Ver más información</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Seguridad para en instalaciones eléctricas</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course2.jpg">
                             <p class="card-text"><em>Basado en la NOM-029-STPS</em></p> 
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course2">Ver más información</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Prevención y protección contra incendios</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course3.jpg">
                             <p class="card-text"><em>Basado en la NOM-002-STPS</em></p> 
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course3">Ver más información</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Seguridad en trabajos de corte y soldadura</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course4.jpg">
                             <p class="card-text"><em>Basado en la NOM-027-STPS</em></p> 
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course4">Ver más información</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Seguridad en espacios confinados</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course5-2.jpeg">
                            <p class="card-text"><em>Basado en la NOM-033-STPS</em></p>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course5">Ver más información</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Seguridad y salud en los centros de construcción</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course6.jpg">
                            <p class="card-text"><em>Basado en la NOM-031-STPS</em></p>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course6">Ver más información</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <p><strong>Sistema globalmente armonizado</strong></p>
                        </div>
                        <div class="card-body">
                            <img loading="lazy" class="img-fluid" id="prueba" src="assets/img/courses/course7.jpg">
                            <p class="card-text"><em>Basado en la NOM-018-STPS</em></p>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inf-course7">Ver más información</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">CONTACTANOS</h2>
                    <h3 class="section-subheading text-muted contactext">Si tienes alguna consulta con respecto a las
                        fechas
                        de impartición, formas de pago u alguna otra consulta envianos un mensaje mediante el siguiente
                        formulario.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <form id="contactForm" action="envio.php" method="POST" enctype="multipart/form-data"
                        novalidate="novalidate">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                    <p class="m-0">Con gusto te ayudaremos</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
                        </div>
                    </form>
                    <br>     
                    <div class="alert alert-info">
                        <strong>Info!</strong> Puedes usar letras, números y signos de puntuación (. , - y paréntesis), según sea necesario.
                    </div>


                    </div>
                </div>
            </div>
        </section>
        <?php include './inc/footer.php'; ?>
        


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button>
        <!-- ------------------------------MODAL---------------------------------- -->
        <div class="modal fade inf-course" id="inf-course1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" >Curso de Seguridad para Trabajos en altura</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                            Durante el curso el participante conocerá todos los requerimientos normativos y
                            su aplicación para la prevención de riesgos laborales en la realización de
                            trabajos en alturas.
                        </p>
                        <img src="assets/img/courses/course1.jpg" alt="Imagen del curso de Seguridad para Trabajos en altura">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>
                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>
                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Elaborar un análisis de seguridad para los trabajos en alturas</li>
                            <li>Reconocimiento de puntos de anclaje</li>
                            <li>Normas de referencia</li>
                            <li>Calculo de fuerza de impacto y consecuencias</li>
                            <li>Consecuencias de traumas por suspensión</li>
                            <li>Elección, inspección de equipos e instalación de sistemas anti caídas</li>
                            <li>Prevenir accidentes de trabajo</li>

                        </ul>

                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>
                        <ol class="description">
                            <li>Objetivo y campo de aplicación</li>
                            <li>Definiciones tecnicas</li>
                            <li>Obligaciones del patron y de los trabajadores</li>
                            <li>Medidas generales para hacer trabajos en altura</li>
                            <ul>
                                <li>Autorización de trabajos en altura</li>
                                <li>Inspeccion de equipos</li>
                                <li>Restricciones de lineas electricas</li>
                            </ul>
                            <li>Sistemas personales para trabajos en altura</li>
                            <ul>
                                <li>Sistema de restriccion</li>
                                <li>Sistema de posicionamiento</li>
                                <li>Sistemas de proteccion personal para interrumpir caidas</li>
                            </ul>
                            <li>Andamios</li>
                            <ul>
                                <li>Tipo torre</li>
                                <li>Suspendidos</li>
                                <li>Hamacas</li>
                            </ul>
                            <li>Plataformas de elevación</li>
                            <ul>
                                <li>Componentes</li>
                                <li>Inspección de equipos y lugar de trabajo</li>
                            </ul>
                            <li>Tipos de escaleras</li>
                            <ul>
                                <li>Condiciones de seguridad</li>
                            </ul>
                            <li>Redes de seguridad</li>
                            <li>Seguimiento a la salud de los trabajadores</li>
                        </ol>
                        <br>
                        <ul class="list-unstyled">

                            <li>Días: Viernes - Sabados</li>
                            <li>Duración: 8 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c1">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Seguridad en instalaciones eléctricas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá los requerimientos normativos aplicables en
                        los centros de trabajo y aplicar los procedimientos de seguridad para trabajos en
                        instalaciones eléctricas.
                        </p>
                        <img src="assets/img/courses/course2.jpg" alt="Imagen del curso de Seguridad en instalaciones eléctricas">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>

                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>
                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Identificación de trabajos potencialmente peligrosos.</li>
                            <li>Identificar consecuencias de errores en los procesos.</li>
                            <li>Tecnicismos en trabajos eléctricos.</li>
                            <li>Conocer equipo de protección personal específico.</li>
                            <li>Aplicación de controles de seguridad.</li>
                            <li>Prevenir accidentes de trabajo.</li>
                            <li>Marco normativo de aplicación.</li>
                        </ul>

                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>
                        <ol class="description">
                            <li>Objetivo y campo de aplicación.</li>
                            <li>Definiciones técnicas.</li>
                            <li>Consecuencias por fallas en los procesos.</li>
                            <li>Identificación de condiciones inseguras en instalaciones.</li>
                            <li>Obligaciones del patrón y de los trabajadores. </li>
                            <li>Información requerida para la autorización de actividades.</li>
                            <li>Determinación de riesgos potenciales.</li>
                            <li>Elaboración de plan de trabajo y análisis de seguridad en el trabajo.</li>
                            <li>Selección de equipo de protección personal especifico.</li>
                            <li>Procedimiento de seguridad para realización de actividades en instalaciones
                                eléctricas.</li>
                            <li>Distancias de seguridad con instalaciones eléctricas.</li>
                            <li>Plan de atención a emergencias.</li>
                        </ol>

                        <ul class="list-unstyled">
                            <li>Días: Sabados - Domingos</li>
                            <li>Duración: 16 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c2">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Prevención y protección contra incendios</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá todos los requerimientos normativos y su
                        aplicación para la prevención y protección contra incendios.
                        </p>
                        <img src="assets/img/courses/course3.jpg" alt="Imagen del curso de Prevención y protección contra incendios">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>

                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>
                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Elaborar un análisis de seguridad para prevención de incendios</li>
                            <li>Elaboración de estudio de riesgo de incendios</li>
                            <li>Conocer el plan de respuesta a emergencias</li>
                            <li>Importancia de aplicación de simulacros </li>
                            <li>Tipos de métodos de extinción del fuego</li>
                            <li>Integración de brigadas de emergencia y </li>
                            <li>Prevenir accidentes de trabajo</li>
                            <li>Marco normativo de aplicación</li>

                        </ul>

                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>

                        <ol class="description">
                            <li>Objetivo y campo de aplicación</li>
                            <li>Definiciones técnicas</li>
                            <li>Obligaciones del patrón y de los trabajadores</li>
                            <li>Condiciones de prevención y protección contra incendios</li>
                            <li>Clasificación del fuego</li>
                            <li>Plan de atención a emergencia de incendio</li>
                            <li>Brigadas contra incendios</li>
                            <li>Tipos de propagación de incendio</li>
                            <li>Métodos de extinción de incendio</li>
                            <li>Inspección de equipos contra incendio</li>
                            <li>Elaboración de reportes de simulacros</li>
                        </ol>

                        <ul class="list-unstyled">
                            <li>Días: Viernes - Sabados</li>
                            <li>Duración: 5 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c3">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course4" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Seguridad en trabajos de corte y soldadura</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá todos los requerimientos normativos y su
                              aplicación para la prevención de riesgos durante los trabajos de corte y soldadura.
                        </p>
                        <img src="assets/img/courses/course4.jpg" alt="Imagen del curso de Seguridad en trabajos de corte y soldadura">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>
                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>

                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>

                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Elaborar un análisis de seguridad para trabajos de corte y soldadura</li>
                            <li>Identificación de tipos de soldadura y riesgos que presentan</li>
                            <li>Supervisar y aplicar los procedimientos de seguridad en trabajos de corte y
                                soldadura
                            </li>
                            <li>Inspección de equipos y herramientas de trabajo</li>
                            <li>Elección de equipo de protección personal especifico</li>
                            <li>Identificación de peligros, riesgos y posibles consecuencias derivados de los
                                trabajos
                            </li>
                            <li>Prevenir accidentes de trabajo</li>
                            <li>Marco normativo de aplicación</li>

                        </ul>

                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>

                        <ol class="description">
                            <li>Objetivo y campo de aplicación</li>
                            <li>Definiciones técnicas</li>
                            <li>Obligaciones del patrón y de los trabajadores</li>
                            <li>Información requerida para la autorización de actividades</li>
                            <li>Supervisión de la correcta instalación de equipos de trabajo</li>
                            <li>Correcta operación, almacenamiento y transporte de cilindros</li>
                            <li>Identificación de atmosferas no respirabes o explosivas y tiempos de exposición
                            </li>
                            <li>Selección de equipos y herramientas de trabajo</li>
                            <li>Análisis de riesgos potenciales</li>
                            <li>Procedimientos de seguridad para elaboración de trabajos de corte y soldadura</li>
                        </ol>


                        <ul class="list-unstyled">
                            <li>Días: Viernes-Sabados</li>
                            <li>Duración: 8 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c4">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course5" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Seguridad en espacios confinados</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá todos los requerimientos normativos y su
                              aplicación para la prevención de riesgos para trabajos en espacios confinados.
                        </p>
                        <img src="assets/img/courses/course5.jpg" alt="Imagen del curso de Seguridad en espacios confinados">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>

                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>

                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Elaborar un análisis de seguridad para trabajos en espacios confinados</li>
                            <li>Identificación de tipos de espacios confinados</li>
                            <li>Supervisar y aplicar los procedimientos de seguridad para trabajos en espacios
                                confinados</li>
                            <li>Inspección de equipos y herramientas de trabajo</li>
                            <li>Elección de equipo de protección personal especifico</li>
                            <li>Identificación de peligros, riesgos y posibles consecuencias derivados de los
                                trabajos
                            </li>
                            <li>Monitoreo de atmosferas y determinación de tiempos de exposición </li>
                            <li>Prevenir accidentes de trabajo</li>
                            <li>Marco normativo de aplicación</li>

                        </ul>

                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>

                        <ol class="description">
                            <li>Objetivo y campo de aplicación</li>
                            <li>Definiciones tecnicas</li>
                            <li>Obligaciones del patron y de los trabajadores </li>
                            <li>Información requerida para la autorización de actividades en espacios confinados
                            </li>
                            <li>Clasificacion de espacios confinados </li>
                            <li>Identificación de peligros y analisis de riesgos</li>
                            <li>Requerimientos administrativos para trabajos en espacios confinados</li>
                            <li>Identificacion de atmosferas peligrosas</li>
                            <li>Selección de equipos y herramientas de trabajo</li>
                            <li>Procedimientos de seguridad para elaboración de trabajos en espacios confinados
                            </li>
                            <li>Clasificación de respiradores purificadores de aire</li>
                        </ol>

                        <ul class="list-unstyled">
                            <li>Días: Viernes - Sabados</li>
                            <li>Duración: 5 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c5">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course6" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Seguridad y salud en los centros de trabajo de construcción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá los requerimientos normativos aplicables en
                              los
                              centros de trabajo y establecer las condiciones de seguridad y salud en obras de
                              construcción para prevenir riesgos laborales.
                        </p>
                        <img src="assets/img/courses/course6.jpg" alt="Imagen de curso de Seguridad y salud en los centros de trabajo de construcción">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>

                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>
                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>

                        <ul class="description">
                            <li>Identificación de tamaño de obra</li>
                            <li>Establecer los programas de seguridad y salud</li>
                            <li>Aplicación de sistemas de seguridad en el trabajo</li>
                            <li>Jerarquización de riesgos potenciales</li>
                            <li>Identificación de trabajos potencialmente peligrosos</li>
                            <li>Conocer el contenido del plan de atención a emergencias</li>
                            <li>Aplicación de controles de seguridad</li>
                            <li>Prevenir accidentes de trabajo</li>
                            <li>Marco normativo de aplicación</li>
                        </ul>


                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>
                        <ol class="description">
                            <li>Objetivo y campo de aplicación </li>
                            <li>Definiciones técnicas</li>
                            <li>Obligaciones del patron y de los trabajadores </li>
                            <li>Información requerida para la autorización de actividades </li>
                            <li>Clasificación de tamaño de obra </li>
                            <li>Elaboración de un análisis de seguridad en el trabajo</li>
                            <li>jerarquización de riesgos potenciales </li>
                            <li>sistemas de seguridad y salud en obras</li>
                            <li>seguridad en trabajos de excavaciones, espacios confinados, corte y soldadura,
                                Alturas, transporte de materiales.</li>
                            <li>Seguridad en trabajos específicos en obras de construcción.</li>
                            <li>Plan de atención a emergencias </li>
                            <li>Investigación de accidentes</li>
                        </ol>

                        <ul class="list-unstyled">
                            <li>Días: Sabados - Domingos</li>
                            <li>Duración: 16 horas</li>
                            <li>Costo: $1200.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c6">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade inf-course" id="inf-course6" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Curso de Sistema globalmente armonizado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> x </button>
                    </div>
                    <div class="modal-body">
                        <p class="item-intro text-muted"><strong>Objetivo:</strong><br>
                        Durante el curso el participante conocerá todos los requerimientos normativos para la
                              identificación y comunicación de peligros y riesgos por sustancias químicas peligrosas
                              en
                              los centros de trabajo mediante la interpretación del Sistema armonizado.
                        </p>
                        <img src="assets/img/courses/course7.jpg" alt="Imagen de curso de Seguridad y salud en los centros de trabajo de construcción">

                        <p class="description">
                            <b>Dirigido a:</b>
                        </p>

                        <ul class="description">
                            <li>Personal operativo</li>
                            <li>Supervisores</li>
                            <li>Responsables de seguridad e higiene</li>
                            <li>Contratistas</li>
                        </ul>
                        <p class="description">
                            <b>¿Qué incluye el curso?</b>
                        </p>
                        <ul class="description">
                            <li>Reconocimiento con valor curricular </li>
                            <li>Constancia de habilidades laborales DC3 (STPS)</li>
                            <li>Tres meses de asesoria </li>
                            <li>Cofee breack</li>
                            <li>Manual del participante </li>

                        </ul>

                        <p class="description">
                            <b>¿Qué aprenderá?</b>
                        </p>
                        <ul class="description">
                            <li>Elaborar un análisis de seguridad para trabajos en espacios confinados</li>
                            <li>Identificación de tipos de espacios confinados</li>
                            <li>Supervisar y aplicar los procedimientos de seguridad para trabajos en espacios
                                confinados</li>
                            <li>Inspección de equipos y herramientas de trabajo</li>
                            <li>Elección de equipo de protección personal especifico</li>
                            <li>Identificación de peligros, riesgos y posibles consecuencias derivados de los
                                trabajos
                            </li>
                            <li>Monitoreo de atmosferas y determinación de tiempos de exposición </li>
                            <li>Prevenir accidentes de trabajo</li>
                            <li>Marco normativo de aplicación</li>
                        </ul>


                        <p class="description">
                            <br>
                            <b>Temario:</b>
                        </p>

                        <ol class="description">
                            <li>Objetivo y campo de aplicación</li>
                            <li>Definiciones técnicas</li>
                            <li>Obligaciones del patrón y de los trabajadores</li>
                            <li>Información requerida para la autorización de actividades</li>
                            <li>Sistema armonizado de identificación y comunicación de peligros y riesgos</li>
                            <li>Hojas de datos de seguridad</li>
                            <li>Señalización</li>
                            <li>Etiquetado, símbolos, pictogramas y frases de advertencia</li>
                        </ol>


                        <ul class="list-unstyled">
                            <li>Días: Viernes - Sabados</li>
                            <li>Duración: 5 horas</li>
                            <li>Costo: $600.00</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success btnregister" href="register.php?course=c7">
                            <i class="fa fa-id-card"></i><span>&nbsp;Registrarme</span>
                        </a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <script src="assets/js/index.js" type="application/javascript" ></script>
    <script src="assets/js/bootstrap/bootstrap.min.js" type="application/javascript" ></script>
    
    </body>
</html>