<?php
namespace App\Models;

class ContaEspecial{
    private string $titular;
    private string $numeroDaConta;
    private float $saldo;
    private float $limite;

    public function __construct(string $Titular, string $NumeroDaConta, float $Saldo, float $Limite){
        $this->setTitular($Titular);
        $this->setNumeroDaConta($NumeroDaConta);
        $this->setSaldo($Saldo);
        $this->setLimite($Limite);
    }

    /**
    * @return string
    */
    public function getTitular(): string {
    	return $this->titular;
    }

    /**
    * @param string $titular
    */
    public function setTitular(string $titular): void {
    	$this->titular = $titular;
    }

    /**
    * @return string
    */
    public function getNumeroDaConta(): string {
    	return $this->numeroDaConta;
    }

    /**
    * @param string $numeroDaConta
    */
    private function setNumeroDaConta(string $numeroDaConta): void {
    	$this->numeroDaConta = $numeroDaConta;
    }

    /**
    * @return float
    */
    public function getSaldo(){
    	return number_format($this->saldo,2);
    }

    /**
    * @param float $saldo
    */
    public function setSaldo(float $saldo): void {
    	$this->saldo = $saldo;
    }

    /**
    * @return float
    */
    public function getLimite(){
    	return number_format($this->limite,2);
    }

    /**
    * @param float $limite
    */
    public function setLimite(float $limite): void {
    	$this->limite = $limite;
    }
}

?>