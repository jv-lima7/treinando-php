<?php 
    class Produto{
        private $codigo;
        private $descricao;
        private $preco;
        private $quantidade;
        private $total;

        public function getCodigo(){
            return $this->codigo;
        }
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        public function exibirMensagem(){
            echo "Produto cadastrado";
        }

        public function calcularTotal(){
            $this->total = $this->preco * $this->quantidade;
            return $this->total;
        }
    }

    $produto = new Produto();

    $produto -> setCodigo(1);
    $produto -> setDescricao("Teclado");
    $produto -> setPreco(120.00);
    $produto -> setQuantidade(10);

    echo "Código: " . $produto -> getCodigo();
    echo "\n";

    echo "Produto: " . $produto -> getDescricao();
    echo "\n";

    echo "Preço: R$". $produto -> getPreco();
    echo "\n";

    echo "Quantidade: ". $produto -> getQuantidade();
    echo "\n\n";

    $total = $produto -> calcularTotal();
    echo "Total: " . $total;
     "\n";
    $produto -> exibirMensagem();

?>