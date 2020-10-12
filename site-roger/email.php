<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$assunto = addcslashes($_POST['assunto'])
$mensagem = addslashes($_POST['message'])

}

?>