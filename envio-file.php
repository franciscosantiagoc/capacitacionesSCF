<?php
   /*var_dump($_POST);*/
 
 if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['course']) && isset($_POST['modal'])){
    echo 'Entro a condicional';
      if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) ){

         /*echo 'Entra a segunda opcion';*/

         $nombre = clean_d(strip_tags($_POST["name"]));
         $apellidos = clean_d(strip_tags($_POST["lastname"]));
         $mail = clean_d(strip_tags($_POST["email"]));
         //$iduser= clean_d(strip_tags($_POST["iduser"]));
         $course= strip_tags($_POST["course"]);
         $modal= strip_tags($_POST["modal"]);
         $fechac= strip_tags($_POST["fechacap"]);      
         $mensaje = clean_d(strip_tags($_POST["message"]));

         if($course!='curso1' && $course!='curso2' && $course!='curso3' && $course!='curso4' && $course!='curso5' && $course!='curso6' && $course!='curso7'){
            header("Location:register.php?response=fail&msj=selc");
         }else if($modal!='pre' && $modal!='vir'){
            header('Location:register.php?response=fail&msj=modalidadNoSeleccionada');
         }else if(empty($fechac)){
            header('Location:register.php?response=fail&msj=fechaNoSeleccionada');
         }else if(strtotime($fechac) < strtotime(date('d-m-Y'))){
            header('Location:register.php?response=fail&msj=fechaErronea');
         }else if(!empty($_FILES['filecomp']['error'])){
            header('Location:register.php?response=fail&msj=archivoNoSeleccionado');
         }

         /*echo 'mensaje supuestamente enviado';
         */
         //variables para los datos del archivo
         $nameFile = $_FILES['filecomp']['name'];
         $sizeFile = $_FILES['filecomp']['size'];
         $typeFile = $_FILES['filecomp']['type'];
         $tempFile = $_FILES["filecomp"]["tmp_name"];
         $extFile =  end(explode(".", $nameFile));
         $fecha= time();
         $fechaFormato = date("j/n/Y",$fecha);
         $correoDestino = "registro@centrodecapacitacionscf.com";

        
         //asunto del correo
         $asunto = "Enviado por " . $nombre . " ". $apellidos;

         
         // -> mensaje en formato Multipart MIME
          $cabecera = "MIME-VERSION: 1.0\r\n";
         $cabecera .= "Content-type: multipart/mixed;";
         $cabecera .="boundary=\"=C=T=E=C=\"\r\n";
         $cabecera .= "From: {$mail}";

         //Primera parte del cuerpo del mensaje
         $cuerpo = "--=C=T=E=C=\r\n";
         $cuerpo .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
         $cuerpo .= "\r\n"; // l??nea vac??a
         $cuerpo .= "Correo enviado por: " . $nombre . " ". $apellidos;
         $cuerpo .= "Fecha: " . $fechaFormato . "\r\n";
         $cuerpo .= "Email: " . $mail . "\r\n";
         $cuerpo .= "Curso: " . $course . "\r\n";
         $cuerpo .= "Fecha escogida: " . $fechac . "\r\n";
         $cuerpo .= "Modalidad: " . $modal . "\r\n";

         $cuerpo .= "Mensaje: " . $mensaje . "\r\n";
         $cuerpo .= "\r\n";// l??nea vac??a

         // -> segunda parte del mensaje (archivo adjunto)
               //    -> encabezado de la parte
            $cuerpo .= "--=C=T=E=C=\r\n";
            $cuerpo .= "Content-Type: application/octet-stream; ";
            $cuerpo .= "name=" . $nameFile . "\r\n";
            $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
            $cuerpo .= "Content-Disposition: attachment; ";
            $cuerpo .= "filename=" . $nameFile . "\r\n";
            $cuerpo .= "\r\n"; // l??nea vac??a

            $fp = fopen($tempFile, "rb");
            $file = fread($fp, $sizeFile);
            $file = chunk_split(base64_encode($file));

            $cuerpo .= "$file $extFile\r\n";
            $cuerpo .= "\r\n"; // l??nea vac??a
            // Delimitador de final del mensaje.
            $cuerpo .= "--=C=T=E=C=--\r\n"; 
            
         //Enviar el correo
         if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
            header('Location:register.php?response=succ');
         }else{
            echo "<scritp>alert('envio fallido');</scritp>";
            header('Location:register.php?response=fail');
         }/**/
         echo "extension de archivo: $extFile";
      }else{
         header('Location:register.php?response=fail&msj=cav');
      }
   }else{
      header('Location:register.php?response=fail');
   }

   function clean_d($cadena){
      $cadena=str_ireplace("<script>","",$cadena);
      $cadena=str_ireplace("</script>","",$cadena);
      $cadena=str_ireplace("<script src>","",$cadena);
      $cadena=str_ireplace("<script type=>","",$cadena);
      $cadena=str_ireplace("SELECT * FROM","",$cadena);
      $cadena=str_ireplace("DELETE * FROM>","",$cadena);
      $cadena=str_ireplace("INSERT INTO","",$cadena);
      $cadena=str_ireplace("DROP TABLE","",$cadena);
      $cadena=str_ireplace("DROP DATABASE","",$cadena);
      $cadena=str_ireplace("TRUNCATE TABLE","",$cadena);
      $cadena=str_ireplace("SHOW TABLES","",$cadena);
      $cadena=str_ireplace("SHOW DATABASES","",$cadena);
      $cadena=str_ireplace("<?php","",$cadena);
      $cadena=str_ireplace("?>","",$cadena);
      $cadena=str_ireplace("--","",$cadena);
      $cadena=str_ireplace(">","",$cadena);
      $cadena=str_ireplace("[","",$cadena);
      $cadena=str_ireplace("]","",$cadena);
      $cadena=str_ireplace("^","",$cadena);
      $cadena=str_ireplace(";","",$cadena);
      $cadena=str_ireplace("::","",$cadena);
      $cadena=str_ireplace("==","",$cadena);
      $cadena=str_ireplace('"',"",$cadena);
      $cadena=str_ireplace('<a',"",$cadena);
      $cadena=str_ireplace('/>',"",$cadena);
      $cadena=str_ireplace('</a>',"",$cadena);
      $cadena=stripslashes($cadena);/*elimina \ */
      $cadena=trim($cadena);
   return $cadena;
   }


?>