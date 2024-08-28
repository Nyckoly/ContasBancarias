<?php
require __DIR__ . "/models/ContaEspecial.php";
require __DIR__ ."/models/ContaPoupanca.php";

use App\Models\{ContaPoupanca,ContaEspecial};

$contaEspecial = new ContaEspecial("Nyckoly", 1, 3000, 5000);

$contaPoupanca = new ContaPoupanca();
$contaPoupanca->setTitular("Kettlyn");
$contaPoupanca->setNumeroDaConta(2);
$contaPoupanca->setSaldo(2000);
$dataAniversario = new DateTime('2024-08-28');
$contaPoupanca->setDataDeAniversario($dataAniversario);

echo "Titular: ". $contaEspecial->getTitular() . "; Número da conta: " . $contaEspecial->getNumeroDaConta() . "; Saldo: " . $contaEspecial->getSaldo() . "; Limite: " . $contaEspecial->getLimite();
echo "Titular: ". $contaPoupanca->getTitular() . "; Número da conta: " . $contaPoupanca->getNumeroDaConta() . "; Saldo: " . $contaPoupanca->getSaldo() . "; Data Aniversario: " . $contaPoupanca->getDataDeAniversario();


?>