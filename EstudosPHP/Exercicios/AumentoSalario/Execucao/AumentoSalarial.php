<?php


$salarioFinal = 0;

function calculaAumentoSalarial($salario)
{
    if ($salario >= 0 && $salario <= 400.00){
        echo "Novo Salário: {$salario + ($salarioFinal = $salario * 0.15)} \n
              Reajuste ganho: {($salarioFinal = $salario * 0.15)} \n
              Em percentual: 15%";

    }elseif ($salario >= 400.01 && $salario <= 800.00){
        echo "Novo Salário: {$salario + ($salarioFinal = $salario * 0.12)} \n
              Reajuste ganho: {($salarioFinal = $salario * 0.12)} \n
              Em percentual: 12%";

    }elseif ($salario >= 800.01 && $salario <= 1200.00) {
        echo "Novo Salário: {$salario + ($salarioFinal = $salario * 0.1)} \n
              Reajuste ganho: {($salarioFinal = $salario * 0.1)} \n
              Em percentual: 10%";

    }elseif ($salario >= 1200.01 && $salario <= 2000.00) {
        echo "Novo Salário: {$salario + ($salarioFinal = $salario * 0.07)} \n
              Reajuste ganho: {($salarioFinal = $salario * 0.07)} \n
              Em percentual: 7%";

    }elseif ($salario >= 2000.01) {
        echo "Novo Salário: {$salario + ($salarioFinal = $salario * 0.04)} \n
              Reajuste ganho: {($salarioFinal = $salario * 0.04)} \n
              Em percentual: 4%";
    }else{
        echo "Digite um valor válido para um salário";
    }
}

