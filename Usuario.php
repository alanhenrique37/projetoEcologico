<?php
    namespace PHP\Modelo;
    class Usuario {
        protected string $nome;
        protected string $cpf;
        protected string $data;
        protected string $categoria;
        protected string $peso;
        protected string $local;

        public function __construct(string $nome, string $cpf, string $data, string $categoria, string $peso, string $local)
        {
            //instanciar
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->data = $data;
            $this->categoria = $categoria;
            $this->peso = $peso;
            $this->local = $local;
            
        }//fim do construtor

        public function __get(
            string $variavel
        ):mixed
        {
            return $this->variavel;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function imprimir():string
        {
            return "<br>Nome: ".$this->nome.
                   "<br>Cpf: ".$this->cpf.
                   "<br>Data: ".$this->data.
                   "<br>Categoria: ".$this->categoria.
                   "<br>Peso: ".$this->peso.
                   "<br>Local: ".$this->local;
        }//fim do método
    }//Fim da classe

?>