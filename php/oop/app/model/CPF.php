<?php

class CPF {
    private string $numero;


    public function __construct(string $numero) {
        $this->numero = $numero;
    }


    public function getNumero(): string {
        return $this->numero;
    }


    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }


    public function __toString(): string {
        return $this->numero;
    }
}