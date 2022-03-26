<?php

 //variables para los campos de texto
 if(isset($_POST['name'])){
      if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && $_POST['message']){
         $nombre = clean_d(strip_tags($_POST["name"]));
         $apellidos = clean_d(strip_tags($_POST["lastname"]));
         $mail = clean_d(strip_tags($_POST["email"]));
         $mensaje = clean_d(strip_tags($_POST["message"]));

         $fecha= time();
         $fechaFormato = date("j/n/Y",$fecha);

         $correoDestino = "consulta@centrodecapacitacionscf.com";
         
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
         $cuerpo .= "\r\n"; // línea vacía
         $cuerpo .= "Correo enviado por: " . $nombre . " ". $apellidos;
         $cuerpo .= "Fecha: " . $fechaFormato . "\r\n";
         $cuerpo .= "Email: " . $mail . "\r\n";
         $cuerpo .= "Mensaje: " . $mensaje . "\r\n";
         $cuerpo .= "\r\n";// línea vacía
            
         //Enviar el correo
         if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
            header('Location:index.php?response=succ');
         }else{
            header('Location:index.php?response=fail');
         }
      }
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