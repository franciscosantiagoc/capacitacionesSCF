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
            <!-- <div class="container_buttons">
                <div class="button_container">
                    <div id="btn_slid1" class="button_slide active"></div>
                    <div id="btn_slid2" class="button_slide"></div>
                    <div id="btn_slid3" class="button_slide"></div>
                </div>
            </div> -->
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

                                <!--Body-->
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
    <script src="assets/js/index.js" type="application/javascript" ></script>
    </body>
</html>