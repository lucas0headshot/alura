<?php

class Titular {
    private string $nome;
    private DateTime $data_nasc;
    private CPF $cpf;
    private Endereco $endereco;


    public function __construct(string $nome, DateTime $data_nasc, CPF $cpf, Endereco $endereco) {
        $this->nome = $nome;
        $this->data_nasc = $data_nasc;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }


    public function getNome(): string {
        return $this->nome;
    }

    public function getDataNasc(): DateTime {
        return $this->data_nasc;
    }

    public function getCPF(): CPF {
        return $this->cpf;
    }

    public function getEndereco(): Endereco {
        return $this->endereco;
    }


    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setDataNasc(DateTime $data_nasc): void {
        $this->data_nasc = $data_nasc;
    }

    public function setCPF(CPF $cpf): void {
        $this->cpf = $cpf;
    }

    public function setEndereco(Endereco $endereco): void {
        $this->endereco = $endereco;
    }


    public function __toString(): string {
        return sprintf(
            "Nome: %s\nData de Nascimento: %s\nCPF: %s\nEndereço: %s",
            $this->nome,
            $this->data_nasc,
            $this->cpf->__toString(),
            $this->endereco->__toString()
        );
    }
}
