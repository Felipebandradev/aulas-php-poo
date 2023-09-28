<?php

require_once "Cliente.php";

class PessoaJuridica extends Cliente{

    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;
    
    public function __construct()
    {
        // acessando o metodo setter protegido
        $this->setSituacao("em analise");
    }

    public function exibirDados(): void
    {
        echo "<h3>Método Exibir Dados - Classe Pessoa Juridica - Polimorfismo de sobreposição</h3>";
        // Ophp só aceita esse tipo
        //  echo "<h4> $this->nome </h4>"; essa linha não ira funcionar pois o atributo nome é privado e da classe cliente
          echo "<h4>".$this->getNome()."</h4>";
  
          echo "<p>Situação:". $this->getSituacao()." </p>";
          echo "<p>Noem Fantasia: $this->nomeFantasia </p>";
    }
   
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }
    

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
    

    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}