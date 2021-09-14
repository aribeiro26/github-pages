<?php
if(isset($_POST['email']) && !empty($_POST['email']){

&nome = addcslashes($_POST['name']);
&email = addcslashes($_POST['email']);
&mensagem = addcslashes($_POST['menssage']);

$to = "alexetec.ribeiro@gmail.com";
$subject = "Contato - Luz Inga";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: alex.ribeiro.94@hotmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP".phpversion();

}
if(mail($to.$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado");
}
}

?>