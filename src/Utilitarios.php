<?php

class Utilitarios{
    
    // Propriedade estática
    public static string $dataAtual;

    // Método estatico
    public static function obterData(){
        /* Self::propriedade
        Permite o Acesso á propriedade estática. */
        self::$dataAtual = date("d/m/Y");
        
    }

    public static function definirAtendimento(int $idade){
        return $idade >=60 ? "prioridade" : "normal";
    }

}