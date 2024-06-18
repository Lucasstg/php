<?php

        class Veiculo {

        protected $placa;
        protected $marca;
        protected $modelo;
        protected $ano;
        protected $cor;
        public function __construct($placa, $marca, $modelo, $ano, $cor) {
            $this->placa = $placa;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->cor = $cor;
        }
        public function getPlaca() {
            return $this->placa;
        }
        public function setPlaca($placa) {
            $this->placa = $placa;
        }
        public function getMarca() {
            return $this->marca;
        }
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function getModelo() {
            return $this->modelo;
        }
        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        public function getAno() {
            return $this->ano;
        }
        public function setAno($ano) {
            $this->ano = $ano;
        }
        public function getCor() {
            return $this->cor;
        }
        public function setCor($cor) {
            $this->cor = $cor;
        }
        public function acelerar() {
            echo "O veículo está acelerando.\n";
        }
    }
    class Carro extends Veiculo {
    public function exibirDetalhes() {
        echo "Detalhes do Carro:\n";
        echo "  Placa: " . $this->getPlaca() . "\n";
        echo "  Marca: " . $this->getMarca() . "\n";
        echo "  Modelo: " . $this->getModelo() . "\n";
        echo "  Ano: " . $this->getAno() . "\n";
        echo "  Cor: " . $this->getCor() . "\n";
    }

    public function acelerar() {
        echo "O carro está acelerando vrum vrum!\n";
    }
    }
    class Moto extends Veiculo {
        public function exibirDetalhes() {
            echo "Detalhes da Moto:\n";
            echo "  Placa: " . $this->getPlaca() . "<br>";
            echo "  Marca: " . $this->getMarca() . "\n";
            echo "  Modelo: " . $this->getModelo() . "\n";
            echo "  Ano: " . $this->getAno() . "\n";
            echo "  Cor: " . $this->getCor() . "\n";
        }
        public function acelerar() {
            echo "A moto está acelerando com um ronco forte!\n";
        }
    }
    $carro = new Carro("ABC123", "Fiat", "Palio", 2020, "Branco", 4);
    $moto = new Moto("DEF456", "Honda", "CG Fan", 2023, "Preto", 2);
    echo "Detalhes do Carro:\n";
    $carro->exibirDetalhes();
    echo "\nDetalhes da Moto:\n";
    $moto->exibirDetalhes();
?>