<?php
namespace ValGPT;


final class Mei extends PessoaJuridica{

    private string $areaDeAtuacao;

    
    public function getAreaDeAtuacao(): string
    {
        return $this->areaDeAtuacao;
    }

    public function setAreaDeAtuacao(string $areaDeAtuacao): self
    {
        $this->areaDeAtuacao = $areaDeAtuacao;

        return $this;
    }

}