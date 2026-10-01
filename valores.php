<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML e Php</title>
</head>
<body>
    <h2>Programa que faz sei la oq</h2>
    <form method="POST">
        <label>Digite um valor: </label>
        <input type="number" name="valor1" step="0.1" required>
        <br><br>

        <label>Digite outro valor: </label>
        <input type="number" name="valor2" step="0.1" required>
        <br><br>

        <label>Selecione a operação a ser executada: </label>
        <select name="operador" required>
            <option value="" disabled selected>Escolha...</option>
            <option value="somar">+ (Somar)</option>
            <option value="subtrair">- (Subtrair)</option>
            <option value="multiplicar">* (Multiplicar)</option>
            <option value="dividir">/ (Dividir)</option>
        </select>

        <input type="submit" value="Enviar">
        <br><br>
    </form>
</body>
</html>

<?php
    class CalculadoraBasica{
        private $valor1;
        private $valor2;
        private $resultado;
        private $operador;

        public function getValor1(){
            return $this->valor1;
        }
        public function setValor1($valor1){
            $this->valor1 = $valor1;
        }

        public function getValor2(){
            return $this->valor2;
        }
        public function setValor2($valor2){
            $this->valor2 = $valor2;
        }

        public function getResultado(){
            return $this->resultado;
        }
        public function calcular(){
            if($this->operador == "somar"){
                $this->resultado = $this->valor1 + $this->valor2;
            } elseif($this->operador == "subtrair"){
                $this->resultado = $this->valor1 - $this->valor2;
            } elseif($this->operador == "multiplicar"){
                $this->resultado = $this->valor1 * $this->valor2;
            } elseif($this->operador == "dividir"){
                if($this->valor2 == 0){
                    $this->resultado = "Impossível dividir por 0!";
                } else {
                    $this->resultado = $this->valor1 / $this->valor2;
                }
            } else {
                $this->resultado = "Operação inválida!";
            }
        }
        public function getOperador(){
            return $this->operador;
        }
        public function setOperador($operador){
            $this->operador = $operador;
        }
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $calculadora = new CalculadoraBasica();

        $calculadora -> setValor1($_POST['valor1']);
        $calculadora -> setValor2($_POST['valor2']);
        $calculadora -> setOperador($_POST['operador']);

        $calculadora -> calcular();
        echo sprintf("Resultado: %.2f",  $calculadora -> getResultado());
    }
?>