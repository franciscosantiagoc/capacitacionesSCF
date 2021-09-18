<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Centro de capacitacion SCF</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <meta description="">
    </head>
    <body>
        <?php include './inc/nav.php'; ?>
        <main>
            <div class="slide-container">
                <div class="slide_section">
                    <img src="" alt="">
                    <div class="slide-desc" id="slider1">
                        <h1>Centro de Capacitación SCF</h1>
                        <p>Ofrecemos Cursos en Seguridad Industrial</p>
                    </div>
                </div>
                <div class="slide_section">
                    <img src="" alt="">
                    <div class="slide-desc" id="slider1">
                        <h2>Seguridad para Trabajos en Alturas</h2>
                        <p>Ofrecemos Curso de Capacitación en Seguridad Trabajos en Alturas</p>
                    </div>
                </div>
                <div class="slide_section">
                    <img src="" alt="">
                    <div class="slide-desc" id="slider1">
                        <h2>Seguridad en Instalaciones Eléctrica</h2>
                        <p>Ofrecemos Curso de Capacitación en Seguridad de Instalaciones Eléctricas</p>
                    </div>

                </div>
            </div>

        </main>

        <section id="objetivos">
            
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
    
    </body>
</html>