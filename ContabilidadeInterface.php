<?php

interface ContabilidadeInterface {
    public function getPatrimonio();
    public function setPatrimonio($patrimonio);
    public function investir($valor);
    public function encerrar($nmEmpresa);
    public function pagarDivida($valor);
}
?>