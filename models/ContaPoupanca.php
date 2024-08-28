<?php

namespace App\Models;

use DateTime;

class ContaPoupanca{
    private $titular;
    private $numeroDaConta;
    private $saldo;
    private DateTime $dataDeAniversario;

    public function getTitular() {
    	return $this->titular;
    }

    /**
    * @param $titular
    */
    public function setTitular($titular) {
    	$this->titular = $titular;
    }

    public function getNumeroDaConta() {
    	return $this->numeroDaConta;
    }

    /**
    * @param $numeroDaConta
    */
    public function setNumeroDaConta($numeroDaConta) {
    	$this->numeroDaConta = $numeroDaConta;
    }

    public function getSaldo() {
    	return $this->saldo;
    }

    /**
    * @param $saldo
    */
    public function setSaldo($saldo) {
    	$this->saldo = $saldo;
    }

    /**
    * @return DateTime
    */
    public function getDataDeAniversario(): DateTime {
    	return $this->dataDeAniversario;
    }

    /**
    * @param DateTime $dataDeAniversario
    */
    public function setDataDeAniversario(DateTime $dataDeAniversario): void {
    	$this->dataDeAniversario = $dataDeAniversario;
    }
}





?>