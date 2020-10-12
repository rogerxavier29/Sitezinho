<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$assunto = addcslashes($_POST['assunto']);
$mensagem = addslashes($_POST['message']);


$to = "rogerdpx@gmail.com";
$body = "Nome: ".$nome."\n".
        "Email: ".$email."\n".
        "Assunto: ".$assunto."n".
        "Mensagem: ".$mensagem."\n";
$header = "From:roger@dpx@gmail.com"."\r\n"
           ."Reply-to:".$email."\r\n"
           ."X=Mailer:PHP/".phpversion();

if (mail($to,$body,$header)){

        echo("Email enviado com sucesso!");;
}else{
        echo("Email não pode ser enviado!");
}           

}

?>