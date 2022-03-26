<?php 
if(isset($_GET["course"])){
    $curs=$_GET["course"];
}else {
    $curs='';
}


if(isset($_GET["response"])){
    $r=$_GET["response"];
}else {
    $r='';
}
if(isset($_GET["msj"])){
    $msj=$_GET["msj"];
    if($msj=='selc'){
        $msj= ', debido a que no ha seleccionado un curso';

    }else if($msj=='selm'){
        $msj= ', debido a que no ha seleccionado una modalidad';

    }else if($msj=='filens'){
        $msj= ', debido a que no ha seleccionado su comprobante de pago';
    }else if($msj=='cav'){
        $msj= ', debido a que no ha llenado todos los campos';
    }else if($msj=='datns'){
        $msj= ', debido a que no ha seleccionado la fecha del curso elegido';
    }else if($msj=='datnv'){
        $msj= ', debido a que la fecha seleccionada no es válida';
    }
}

if(isset($_GET["buy"])){
    $buy=$_GET["buy"];
    if($buy=='succe'){
        $buy='Su pago se ha realizado exitosamente, porfavor entre a su cuenta paypal, tome una foto de los detalles del pago realizado y envielo rellenando el siguiente formulario.';
    }else if($buy=='cancel'){
        $buy='Su pago ha sido cancelado.';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
   <?php
      include ('./inc/styles.php') ;
   ?>

</head>

<body>
   <?php include('./inc/nav.php'); ?>

   <div id="info-pago" class="contact-clean">

      <div class="infop-elem">
         <form id="info-paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <center>
               
               <h1>Formulario de Pago de Inscripción </h2>
                  <p>Para continuar con su registro, seleccione una de las diferentes opciones de pago, una vez
                     realizado el pago envie el comprobante completando el siguiente formulario</p><br>
                  <h2>Opcion #1 Deposito o Transferencia Bancaria</h2>
                  <p><strong>Número de Cuenta:</strong> 10065610626</p><br>
                  <p><strong>CLABE:</strong> 137617100656106268</p><br>
                  <span>NOTA: Si desea obtener factura, realice el pago del costo del curso deseado (mostrado en la
                     pagina anterior) + el 16% de IVA, para proceder con su solicitud (unicamente aplica para la opcion
                     #1).</span>


                  <h2>Opcion #2 Paypal</h2>
            </center>
            <!-- <h1>Formulario de Inscripción </h2> -->
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="SRKE9WRRRA72S">     
            <table>
               <tr>
                  <td>
                     <center><input type="hidden" name="on0" value="Cursos disponibles">Cursos disponibles</center>
                  </td>
               </tr>
               <tr>
                  <td>
                     <center>
                        <select name="os0">
                           <option value="1. Seguridad para Trabajos en Alturas(16hrs)" <?php if($curs=='c1'){ echo 'selected=""'; } ?>>1. Seguridad para Trabajos en Alturas(16hrs) $650.00 MXN</option>
                           <option value="2. Seguridad en Instalaciones Eléctricas(16hrs)" <?php if($curs=='c2'){ echo 'selected=""'; } ?>>2. Seguridad en Instalaciones Eléctricas(16hrs) $650.00 MXN</option>
                           <option value="3. Prevención y Protección Contra Incendios(5hrs)" <?php if($curs=='c3'){ echo 'selected=""'; } ?>>3. Prevención y Protección Contra Incendios(5hrs) $650.00 MXN</option>
                           <option value="4. Seguridad en Trabajos de Corte y Soldadura(8hrs)" <?php if($curs=='c4'){ echo 'selected=""'; } ?>>4. Seguridad en Trabajos de Corte y Soldadura(8hrs) $650.00 MXN</option>
                           <option value="5. Seguridad en Espacios Confinados(5hrs)" <?php if($curs=='c5'){ echo 'selected=""'; } ?>>5. Seguridad en Espacios Confinados(5hrs) $650.00 MXN</option>
                           <option value="6. Seguridad y Salud en los Centros de Construcción(16hrs)" <?php if($curs=='c6'){ echo 'selected=""'; } ?>>6. Seguridad y Salud en los Centros de Construcción(16hrs) $1,250.00 MXN</option>
                           <option value="7. Sistema Globalmente Armonizado(5hrs)" <?php if($curs=='c7'){ echo 'selected=""'; } ?>>7. Sistema Globalmente Armonizado(5hrs) $650.00 MXN</option>
                        </select>
                     </center>
                  </td>
               </tr>
            </table>
            <input type="hidden" name="currency_code" value="MXN">
            <center><input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."></center>
            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1"><br>
            <span id="">NOTA: al pagar mediante Paypal se aplica una comisión por el uso de la plataforma de
                  pago.</span>
         </form>
      </div>

      <!-- <div class="infop-elem"></div> -->

   </div>

   <div id="divinscripcion" class="contact-clean contact-reg">


      <form action="envio-file.php" method="POST" enctype="multipart/form-data" novalidate="novalidate">
         <center><img src="./assets/img/registro.png"></center>   
         <h2 class="text-center">Registro</h2>
         <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nombre" required="">
         </div>
         <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Apellidos"
               required=""></div>
         <div class="form-group"><input class="form-control is-invalid" type="email" name="email"
               placeholder="Email válido" required=""></div>
         <!-- <div class="form-group"><input class="form-control" type="text" name="iduser" placeholder="CURP" required="">
         </div> -->
         <div class="form-group">
            <select class="form-control" name="course" required="">
               <optgroup label="Cursos">
                  <option value="" <?php if($curs==''){ echo 'selected=""'; } ?>>Seleccione un curso</option>

                  <option value="curso1" <?php if($curs=='c1'){ echo 'selected=""'; } ?>>1. Seguridad para trabajos en
                     alturas</option>

                  <option value="curso2" <?php if($curs=='c2'){ echo 'selected=""'; } ?>>2. Seguridad en instalaciones
                     eléctricas</option>

                  <option value="curso3" <?php if($curs=='c3'){ echo 'selected=""'; } ?>>3.Prevención y protección
                     contra incendios</option>
                  <option value="curso4" <?php if($curs=='c4'){ echo 'selected=""'; } ?>>4. Seguridad en trabajos de
                     corte y soldadura</option>
                  <option value="curso5" <?php if($curs=='c5'){ echo 'selected=""'; } ?>>5. Seguridad en espacios
                     confinados</option>

                  <option value="curso6" <?php if($curs=='c6'){ echo 'selected=""'; } ?>>6. Seguridad y salud en los
                     centros de trabajo de construcción</option>

                  <option value="curso7" <?php if($curs=='c7'){ echo 'selected=""'; } ?>>7. Sistema globalmente
                     armonizado</option>

               </optgroup>
            </select>
         </div>
         <div class="form-group">
            <label>Actualmente la Modalidad presencial no esta disponible por temas de seguridad contra el Covid19</label>
            <select class="form-control" name="modal" required="">
               <optgroup label="Modalidad">
                  <option value="" selected="">Seleccione la Modalidad</option>
                  <option value="virtual">Virtual</option>
               </optgroup>
            </select>
         </div>
         <div class="form-group">
            <label>Consulte fechas disponibles <a href="index.php#contact"> aquí</a></label>

            <input class="form-control is-invalid" type="date" name="fechacap" placeholder="Fecha Seleccionada"
               required="">
         </div>
         <div class="form-group" id="divimgcomprobante"><label>Seleccione su comprobante de pago</label><input
               accept="image/png,image/jpeg" type="file" name="filecomp" required=""></div>
         <div class="form-group"><textarea class="form-control" name="message" placeholder="Mensaje (Opcional)"
               rows="14"></textarea></div>
         <div class="form-group"><button class="btn btn-primary" type="submit">Enviar</button></div>
      </form>
      <br>
      <?php
            if($r=='succ'){
                echo'
                <div class="alert alert-success">
                    <strong>¡Bien hecho!</strong> Tu mensaje ha sido enviado correctamente, en las proximas horas recibiras una respuesta de nuestro equipo.
                </div>';
            }else if($r=='fail'){    
                echo "
                <div class='alert alert-danger'>
                    <strong>Error!</strong> Lamentablemente, no se ha podido enviar tu mensaje
                </div>";
            }else if($r==''){
                echo '<div class="alert alert-info">
                            <strong>Info!</strong> Asegurese de que su Información este correctamente escrita.
                        </div>';
            }
        ?>


   </div>
   <?php 
      include ('./inc/footer.php'); 
      include ('./inc/scripts.php') ;

   ?>


</body>

</html>