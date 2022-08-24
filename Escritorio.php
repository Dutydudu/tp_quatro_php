<?php
include_once 'ContabilidadeInterface.php';

class Escritorio implements ContabilidadeInterface {
    private $patrimonio;
    private $nmEmpresa;
    private $valor;
    private $lucro;

    public function setPatrimonio($patrimonio) {
        $this->patrimonio = $patrimonio;
    }
    public function getPatrimonio() {
        return $this->patrimonio;
    }

    public function investir($valor) {
        $this->lucro = $this->patrimonio * ($valor / 100);
        echo "<br>\n Lucro: {$this->lucro}";
    }
    
    public function pagarDivida($valor) {
        echo "<br>\nDivida paga com sucesso! Saldo Atual de {$this->patrimonio}";
    }

    public function encerrar($nmEmpresa) {
        echo "<br>\n Servicos encerrador com a empresa {$nmEmpresa}";
    }
}

?>