<?php

Class Config{

    // informações basicas do site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "mini_loja";
    const SITE_NOME = "Mini Loja - PHP e Mysqli";
    const SITE_EMAIL_ADM = "joaoluis.lourenco12@gmail.com";

    // informações do banco de dados
    const BD_HOST = "localhost";
    const BD_USER = "root";
    const BD_SENHA = "";
    const BD_BANCO = "lojajoao";
    const BD_PREFIX = "as_";

    // informações do PHP Mailer
    const EMAIL_HOST = "smtp.gmail.com",
          EMAIL_USER = "joaoluis.lourenco12@gmail.com",
          EMAIL_NOME = "Contato Mini Loja João",
          EMAIL_SENHA = "",
          EMAIL_PORTA = 587,
          EMAIL_SMTPAUTH = true,
          EMAIL_SMTPSECURE = "tls",
          EMAIL_COPIA = "joaoluis.lourenco12@gmail.com";


}

?>