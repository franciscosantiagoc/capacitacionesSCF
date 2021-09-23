<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Centro de capacitacion SCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/fontawesome/css/all.min.css">  
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    </head>
    <body>
        <?php include ('./inc/nav.php'); ?>
        <main>
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
                        <h2>Seguridad para Trabajos en Alturas</h2>
                        <p>Ofrecemos Curso de Capacitación en Seguridad Trabajos en Alturas</p>
                    </div>
                </div>
                <div class="slide_section">
                    <img src="assets/img/slide/inst-elect.jpg" alt="Imagen de trabajo instalaciones electricas">
                    <div class="slide-desc" id="slider1">
                        <h2>Seguridad en Instalaciones Eléctrica</h2>
                        <p>Ofrecemos Curso de Capacitación en Seguridad de Instalaciones Eléctricas</p>
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
            
        </section>

        <section id="contacto">
            <div>
               <h2 >CONTACTANOS</h2>
               <p>Si tienes alguna consulta con respecto a las fechas de impartición, formas de pago u alguna otra consulta envianos un mensaje mediante el siguiente
                  formulario.</p>
            </div>
            <form id="contactForm">
                <div class="form-row">
                    <div class="input-container">
                        <input class="form-control" type="text" id="name" placeholder="Nombre" name="name"
                            required><small class="form-text-alert"></small>
                    </div>
                    <div class="input-container">
                        <input class="form-control" type="text" id="name" placeholder="Apellidos" name="lastname"
                            required>
                    </div>
                    <div class="input-container">
                        <input class="form-control" type="email" id="email" placeholder="Email (Activo)" name="email"
                            required>
                    </div>
                    <div class="input-container">
                        <textarea class="form-control" id="message" placeholder="Mensaje" name="message"
                            required></textarea>
                    </div>
                    
                    <div class="input-container">
                        <div id="success"></div>
                        <button id="sendMessageButton" type="submit">Enviar mensaje</button>
                    </div>
                </div>
            </form>
        </section>

        <?php include './inc/footer.php'; ?>
    <script src="assets/js/index.js" type="application/javascript" ></script>
    </body>
</html>