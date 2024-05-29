<?php
class Endereco {
    private string $logradouro;
    private string $cidade;
    private string $numero;


    public function __construct(string $logradouro, string $cidade, string $numero) {
        $this->logradouro = $logradouro;
        $this->cidade = $cidade;
        $this->numero = $numero;
    }


    public function getLogradouro(): string {
        return $this->logradouro;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function getNumero(): string {
        return $this->numero;
    }


    public function setLogradouro(string $logradouro): void {
        $this->logradouro = $logradouro;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }


    public function __toString(): string {
        return sprintf("%s, %s, %s", $this->logradouro, $this->cidade, $this->numero);
    }
}