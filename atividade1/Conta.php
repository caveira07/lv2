<?php 

class Produto{
    public $numeroItem;
    public $descricaoItem;
    public $quantidadeItem;
    public $precoItem;

    public function getFatura(){
        return $this->Fatura;
    }
    public function exibirFatura(){

        $numeroItem = 01;
        $quantidadeItem = 10;
        $descricaoItem = "Banana";
        $precoItem = 10.00;

        echo "Numero do Produto $numeroItem";
        echo "Quantidade do Produto $quantidadeItem";
        echo "Descrição do Produto $descricaoItem";
        echo "Preço do Produto $precoItem";
    }
}

    //     class Conta{
    //     // atributos 
    //     public $saldo;
    //     // métodos
    //     public function getSaldo(){
    //     return $this->saldo;
    //     }
    //     public function exibirSaldo(){
    //         $dataAtual = Date('d/m/Y');
    //         echo "\nSeu saldo hoje, $dataAtual, e seu saldo {$this->getSaldo()}";
    //     }

    // }


?>