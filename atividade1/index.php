<?php

    include 'Produto.php';
    include 'Conta.php';

    $fatura = new Produto();

    $conta1->$fatura = 1000;
    

    $conta1->getFatura();
    
    echo "O número do produto: {$conta1->getFatura()}";

    echo "{conta1->exibirSaldo()}";

    //  $usuario1 = new Usuario();
    //  $usuario2 = new Usuario();
    //  var_dump($usuario1);

    //  $usuario1->nome = "Rubens";

    //  $usuario2->nome = "Maria";

   

    //  echo "O primeiro nome é $usuario1->nome e o segundo nome é $usuario2->nome" ;


    //  var_dump($pessoa1);

    
?>