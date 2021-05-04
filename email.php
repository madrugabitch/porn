<?php
      if(isset($_POST['email']) && !empty($_POST['email'])){


      $nome = addslashes($_POST['name']);
      $email = addslashes($_POST['email']);
      $mensagem = addslashes($_POST['mesage']);


      $to = "pterrorcom@gmail.com";
      $subject ="WEB OUTDOOR CLIENT";
      $body = "Nome: " .$nome. "\r\n".
              "E-mail: " .$email. "\r\n".
              "Mensagem: " .$mensagem;
     $header = "From: projestua@gmail.com". "\r \n".
      "Reply-To".$email."\r\n".
      "X=Mailer:PHP/".phpversion();

      if(mail($to,$subject,$body,$header)) {

           echo("E-mail enviado com sucesso!");
      } else {
           echo("E-mail não foi enviado.");
      }


    }




 ?>
