<?php
class Conta {
    private string $numero;
    private Titular $titular;
    private string $agencia;
    private string $conta;


    public function __construct(string $numero, Titular $titular, string $agencia, string $conta) {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
    }


    public function getNumero(): string {
        return $this->numero;
    }

    public function getTitular(): Titular {
        return $this->titular;
    }

    public function getAgencia(): string {
        return $this->agencia;
    }

    public function getConta(): string {
        return $this->conta;
    }


    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }

    public function setTitular(Titular $titular): void {
        $this->titular = $titular;
    }

    public function setAgencia(string $agencia): void {
        $this->agencia = $agencia;
    }

    public function setConta(string $conta): void {
        $this->conta = $conta;
    }


    public function __toString(): string {
        return sprintf(
            "Número: %s\nTitular: %s\nAgência: %s\nConta: %s",
            $this->numero,
            $this->titular->__toString(),
            $this->agencia,
            $this->conta
        );
    }
}